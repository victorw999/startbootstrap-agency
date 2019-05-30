$(function() {

  var sitekey = $("#sitekey").val();  // grap sitekey from hidden element in index.php, from constant.php
  var mail_sender_url = ""; // path for the php that actually executing the mail sending.

  grecaptcha.ready(function() {
    grecaptcha.execute( sitekey , {
      action: 'contact'
    })
    .then(function(token) {

      /**/
      document.getElementById('recaptchaResponse').value = token; // add token to form's hidden element

      console.log(" b4 posting to backend script");

      // pass token to backend script for verification, using ajax
      $.post("recaptcha/backend_validate.php", {
        token: token
      },function(result){
        console.log("start eval results");

        if (result.success){
          mail_sender_url = "mail/contact_me2.php";
          console.log("result.success")
        }else{
          mail_sender_url = "test";
          console.log("result NOT success")
        }
      });
    })
    .then(formValidation); // after getting the recaptcha validation, then call the original formValidation
  });


// vicmod: creat a var 'formValidation' to hold the original function, and then chain it after recaptcha.
var formValidation = $("#contactForm input,#contactForm textarea").jqBootstrapValidation({
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


      // Check for white space in name for Success/Fail message
      if (firstName.indexOf(' ') >= 0) {
        firstName = name.split(' ').slice(0, -1).join(' ');
      }
      $this = $("#sendMessageButton");
      $this.prop("disabled", true); // Disable submit button until AJAX call is complete to prevent duplicate messages

      console.log( "mail_sender_url : " + mail_sender_url);

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
          $('.prompt_box').append("\n Success " + mail_sender_url);
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
          $('.prompt_box').append(" \n failed " + mail_sender_url);
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
