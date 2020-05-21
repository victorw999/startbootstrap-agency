/** 
 *    "js/contact_me.js"    original templates:
 *    https://github.com/BlackrockDigital/startbootstrap-agency/blob/v4.1.1/js/contact_me.js
 
 *    originally only has 2 steps:
 *    1. validate form inputs, if success, then 
 *    2. post to backend 'mail.contact_me.php' to mail()
 * 
 *    I added the Google Recaptcha V3. so it has 3 steps:
 *    1. use "SITE_KEY" to get "token", 
 *        then send "token" to "backend_validate.php"
 *        depending on the returned value, assign the "mail_sender_url".
 *        which will be used on step 3
 *    2. validate form inputs,    
 *    3. if success, post to backend 'mail.contact_me.php' to mail()
 *    4. if failed, do not call ajax(), display "captcha failed " msg
 *   
 */

$(function () {
  // grap sitekey from hidden input in index.php, from constant.php
  var sitekey = $("#sitekey").val();
  // path for the php that actually executing the mail sending.
  var mail_sender_url = "";

  // captcha REF: https://codeforgeek.com/google-recaptcha-v3-tutorial/
  grecaptcha.ready(function () {
    grecaptcha
      .execute(sitekey, {
        action: "contact",
      })
      .then(function (token) {
        // pass token to backend script for verification using ajax
        $.post(
          "recaptcha/backend_validate.php",
          {
            token: token,
          },
          function (result) {
            if (result.success) {
              mail_sender_url = "mail/contact_me.php";

              /**
               * 20.0520
               * below debugging codes are causing issue with gulp-uglify,
               * hence commented out
               * if need to debug, then uncomment
               */
              // (() => {
              //   // using a callback to log to console
              //   // REF: https://stackoverflow.com/questions/16987811/why-cant-i-return-data-from-post-jquery
              //   console.log("result.success");
              // })();
            } else {
              mail_sender_url = "mail/contact_no.php";
              // (() => {
              //   console.log("result NOT success");
              // })();
            }
          }
        );
      })
      .then(formValidation);
    // after getting the recaptcha validation, then call the original "formValidation()"
  });

  // vicmod: creat a var 'formValidation' to hold the original function, and then chain it after recaptcha.
  var formValidation = $(
    "#contactForm input,#contactForm textarea" // grab DOM's input to verify
  ).jqBootstrapValidation({
    preventSubmit: true,
    submitError: function ($form, event, errors) {
      // additional error messages or events
    },
    submitSuccess: function ($form, event) {
      event.preventDefault(); // prevent default submit behaviour
      // get values from FORM
      var name = $("input#name").val();
      var email = $("input#email").val();
      var phone = $("input#phone").val();
      var message = $("textarea#message").val();
      var firstName = name; // For Success/Failure Message

      // Check for white space in name for Success/Fail message
      if (firstName.indexOf(" ") >= 0) {
        firstName = name.split(" ").slice(0, -1).join(" ");
      }
      $this = $("#sendMessageButton");
      $this.prop("disabled", true); // Disable submit button until AJAX call is complete to prevent duplicate messages

      console.log("mail_sender_url : " + mail_sender_url);

      /**
       * vicmod:
       * decide id call ajax() based on reCAPTCHA result
       */
      if (mail_sender_url === "mail/contact_me.php") {
        $.ajax({
          url: mail_sender_url,
          type: "POST",
          data: {
            name: name,
            phone: phone,
            email: email,
            message: message,
          },
          cache: false,
          success: function () {
            // Success message
            $("#success").html("<div class='alert alert-success'>");
            $("#success > .alert-success")
              .html(
                "<button type='button' class='close' data-dismiss='alert' aria-hidden='true'>&times;"
              )
              .append("</button>");
            $("#success > .alert-success").append(
              "<strong>Your message has been sent. </strong>"
            );
            $("#success > .alert-success").append("</div>");
            //clear all fields
            $("#contactForm").trigger("reset");
          },
          error: function () {
            // Fail message
            $("#success").html("<div class='alert alert-danger'>");
            $("#success > .alert-danger")
              .html(
                "<button type='button' class='close' data-dismiss='alert' aria-hidden='true'>&times;"
              )
              .append("</button>");
            $("#success > .alert-danger").append(
              $("<strong>").text(
                "Sorry " +
                  firstName +
                  ", it seems that my mail server is not responding. Please try again later!"
              )
            );
            $("#success > .alert-danger").append("</div>");
            //clear all fields
            $("#contactForm").trigger("reset");
          },
          complete: function () {
            setTimeout(function () {
              $this.prop("disabled", false); // Re-enable submit button when AJAX call is complete
            }, 1000);
          },
        }); // AJAX END
      } else {
        /**
         *  vicmod: reCAPTCHA failed: display "Captcha Fail" in DOM
         */
        $("#success").html("<div class='alert alert-danger'>");
        $("#success > .alert-danger")
          .html(
            "<button type='button' class='close' data-dismiss='alert' aria-hidden='true'>&times;"
          )
          .append("</button>");
        $("#success > .alert-danger").append(
          $("<strong>").text("Captcha Failed!")
        );
        $("#success > .alert-danger").append("</div>");
        //clear all fields
        $("#contactForm").trigger("reset");
      }
    },
    filter: function () {
      return $(this).is(":visible");
    },
  });

  $('a[data-toggle="tab"]').click(function (e) {
    e.preventDefault();
    $(this).tab("show");
  });
});

/*When clicking on Full hide fail/success boxes */
$("#name").focus(function () {
  $("#success").html("");
});
