$(function() {

  $("#contactForm input,#contactForm textarea").jqBootstrapValidation({
      preventSubmit: true,
      submitError: function($form, event, errors) {
        // additional error messages or events
      },
      submitSuccess: function($form, event) {
        event.preventDefault(); // prevent default submit behaviour
        // get values from FORM

        var micaptcha = $("#g-recaptcha-response").val();

      }
      $.ajax({
        url: "model/validate.php",
        method: "POST",
        //Estos datos son enviados a validar con php
        data: {

          micaptcha: micaptcha,

        },
        cache: false,
        success: function(data) {

        },
        error: function(data) {

        },
        complete: function(data) {

        },
      });
    },

  });

$("a[data-toggle=\"tab\"]").click(function(e) {
  e.preventDefault();
  $(this).tab("show");
});
});
