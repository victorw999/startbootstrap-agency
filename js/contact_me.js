$(function() {
  //vicmod
  var sitekey = $("#sitekey").val();  // grap sitekey from hidden element, from constant.php
  var captcha_result;
  var mail_sender_url ="";

  grecaptcha.ready(function() {
    grecaptcha.execute( sitekey , {
      action: 'contact'
    }).then(function(token) {
      document.getElementById('recaptchaResponse').value = token; // add token to form's hidden element

      // pass token to backend script for verification, using ajax
      $.post("recaptcha/backend_validate.php", {
        token: token
      },function(result){
        if (result.success){
          mail_sender_url = "mail/contact_me2.php";
        }else{
          mail_sender_url = "test";
        }
        // captcha_result = result;
      });

      // if reCAPTCHA result is negative, then won't initiate the contact_me.php

      // if (captcha_result === undefined ){
      //    //alert("captcha_result not defined!");
      // }else if (captcha_result.success){
      //   mail_sender_url = "mail/contact_me2.php"
      //   alert("mail_sender_url set");
      // }else{
      //   alert("mail_sender_url NOT set!");
      //   mail_sender_url = "test";
      // }


    });
  });



  $("#contactForm input,#contactForm textarea").jqBootstrapValidation({
    preventSubmit: true,
    submitError: function($form, event, errors) {
      // additional error messages or events
    },
    submitSuccess: function($form, event) {
      event.preventDefault(); // prevent default submit behaviour
      // get values from FORM
      var name = $("input#name").val();
      var email = $("input#email").val();
      var phone = $("input#phone").val();
      var message = $("textarea#message").val();
      var firstName = name; // For Success/Failure Message

      // //vicmod
      // var sitekey = $("#sitekey").val();  // grap sitekey from hidden element, from constant.php
      // var captcha_result;
      //
      // grecaptcha.ready(function() {
      //   grecaptcha.execute( sitekey , {
      //     action: 'contact'
      //   }).then(function(token) {
      //     document.getElementById('recaptchaResponse').value = token; // add token to form's hidden element
      //
      //     // pass token to backend script for verification, using ajax
      //
      //     $.post("recaptcha/backend_validate.php", {
      //       token: token
      //     },function(result){
      //       if (result.success){
      //         // alert ("monkey");
      //       }
      //       captcha_result = result;
      //     });
      //
      //   });
      // });



      // Check for white space in name for Success/Fail message
      if (firstName.indexOf(' ') >= 0) {
        firstName = name.split(' ').slice(0, -1).join(' ');
      }
      $this = $("#sendMessageButton");
      $this.prop("disabled", true); // Disable submit button until AJAX call is complete to prevent duplicate messages
      $.ajax({
        url: mail_sender_url,
        type: "POST",
        data: {
          name: name,
          phone: phone,
          email: email,
          message: message
        },
        cache: false,
        success: function() {
          // Success message
          $('.prompt_box > .alert-success ').append(mail_sender_url);
          $('#success').html("<div class='alert alert-success'>");
          $('#success > .alert-success').html("<button type='button' class='close' data-dismiss='alert' aria-hidden='true'>&times;")
            .append("</button>");
          $('#success > .alert-success')
            .append("<strong>Your message has been sent. </strong>");
          $('#success > .alert-success')
            .append('</div>');
          //clear all fields
          $('#contactForm').trigger("reset");
        },
        error: function() {
          // Fail message
          $('.prompt_box > .alert-danger').append(mail_sender_url);
          $('#success').html("<div class='alert alert-danger'>");
          $('#success > .alert-danger').html("<button type='button' class='close' data-dismiss='alert' aria-hidden='true'>&times;")
            .append("</button>");
          $('#success > .alert-danger').append($("<strong>").text("Sorry " + firstName + ", it seems that my mail server is not responding. Please try again later!"));
          $('#success > .alert-danger').append('</div>');
          //clear all fields
          $('#contactForm').trigger("reset");
        },
        complete: function() {
          setTimeout(function() {
            $this.prop("disabled", false); // Re-enable submit button when AJAX call is complete
          }, 1000);
        }
      });
    },
    filter: function() {
      return $(this).is(":visible");
    },
  });

  $("a[data-toggle=\"tab\"]").click(function(e) {
    e.preventDefault();
    $(this).tab("show");
  });
});

/*When clicking on Full hide fail/success boxes */
$('#name').focus(function() {
  $('#success').html('');
});
