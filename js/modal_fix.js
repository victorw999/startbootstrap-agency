(function ($) {
  "use strict"; // Start of use strict

  //===========================================
  // vicmod: stop video automatically when close the modal,
  //===========================================

  // REF: https://rb.gy/n6716d
  // bk url frm element, re-assign to the modal once it's re-opened
  var url_warehouse = $("#iframe_vid_warehouse").attr("src");
  var url_akwa = $("#iframe_vid_akwa").attr("src");

  // when modal closed, rm video's src
  $("#modalpopup_warehouse").on("hide.bs.modal", function () {
    $("#iframe_vid_warehouse").attr("src", "");
  });
  // put the src back, once modal re-opened
  $("#modalpopup_warehouse").on("show.bs.modal", function () {
    $("#iframe_vid_warehouse").attr("src", url_warehouse);
  });

  $("#modalpopup_akwa").on("hide.bs.modal", function () {
    $("#iframe_vid_akwa").attr("src", "");
  });
  $("#modalpopup_akwa").on("show.bs.modal", function () {
    $("#iframe_vid_akwa").attr("src", url_akwa);
  });
})(jQuery); // End of use strict
