(function ($) {
  "use strict"; // Start of use strict

  // Smooth scrolling using jQuery easing
  $('a.js-scroll-trigger[href*="#"]:not([href="#"])').click(function () {
    if (
      location.pathname.replace(/^\//, "") ==
        this.pathname.replace(/^\//, "") &&
      location.hostname == this.hostname
    ) {
      var target = $(this.hash);
      target = target.length ? target : $("[name=" + this.hash.slice(1) + "]");
      if (target.length) {
        $("html, body").animate(
          {
            scrollTop: target.offset().top - 54,
          },
          1000,
          "easeInOutExpo"
        );
        return false;
      }
    }
  });

  // Closes responsive menu when a scroll trigger link is clicked
  $(".js-scroll-trigger").click(function () {
    $(".navbar-collapse").collapse("hide");
  });

  // Activate scrollspy to add active class to navbar items on scroll
  $("body").scrollspy({
    target: "#mainNav",
    offset: 56,
  });

  // Collapse Navbar
  var navbarCollapse = function () {
    if ($("#mainNav").offset().top > 100) {
      $("#mainNav").addClass("navbar-shrink");
    } else {
      $("#mainNav").removeClass("navbar-shrink");
    }
  };
  // Collapse now if page is not at top
  navbarCollapse();
  // Collapse the navbar when page is scrolled
  $(window).scroll(navbarCollapse);

  // Hide navbar when modals trigger
  $(".portfolio-modal").on("show.bs.modal", function (e) {
    $(".navbar").addClass("d-none");
  });
  $(".portfolio-modal").on("hidden.bs.modal", function (e) {
    $(".navbar").removeClass("d-none");
  });

  //===========================================
  // vicmod: mixitup gallery, for "filter_gallery"'s content boxes
  //===========================================

  var containerEl = document.querySelector(".mixitup_content");
  var mixer;

  /**
   *  functions for reading URL
   */
  // var targetSelector = ".mix";
  var targetSelector = ".vicproj";

  //use ? instead of #, get the paramter from ? to #
  function getSelectorFromParam() {
    var urlString = window.location.href;
    var param = "filter";

    // get substring between ? and #
    var qIndex = urlString.lastIndexOf("?"); // question mark index
    var hIndex = urlString.lastIndexOf("#"); // hash index

    // parse parameters from ? to #,
    // if no #, then parse from ? to end
    // if no ?, then substring will be empty
    var paramSubstring =
      qIndex === -1
        ? ""
        : urlString.substring(
            qIndex + 1,
            hIndex === -1 ? urlString.length : hIndex
          );

    // if there's no paramter passing in, then default is show all projects ".vicproj"
    // if (paramSubstring === "") {
    //   return ".vicproj";
    // }

    // array contains parameters,
    var url = paramSubstring.split("&");

    for (var i = 0; i < url.length; i++) {
      var params = url[i].split("=");
      var selector = targetSelector; // default selector
      if (params[0] == param) {
        selector = "." + params[1];
        return selector;
      }
    }
    return false;
  }

  /**
   * callback function for MixItUp config
   * this will be called at the end of each operation
   * this will set URL paramaters after ?
   */
  function setParams(state) {
    var selector = state.activeFilter.selector;
    var newParam = "?filter=" + selector.replace(/^\./g, "");

    if (selector === targetSelector && getSelectorFromParam()) {
      // Equivalent to filter "all", remove the hash
      history.pushState(null, document.title, window.location.pathname);
      // or history.replaceState()
    } else if (
      newParam !== getSelectorFromParam() &&
      selector !== targetSelector
    ) {
      // Change the hash
      history.pushState(
        null,
        document.title,
        window.location.pathname + newParam
      ); // or history.replaceState()
    }
  }

  /**
   * END: define func for reading URL
   */

  if (containerEl) {
    /* check if the element exits on the page ref: https://bit.ly/2JBbDvO */

    // REF:  Reading a URL hash and mapping it into a DOM selector
    // https://www.kunkalabs.com/tutorials/filtering-and-sorting-on-load/

    // To be able to read URL, below codes are modified based on this demo
    // https://demos.kunkalabs.com/mixitup/filtering-by-url/#blue

    // Instantiate and configure the mixer
    mixer = mixitup(containerEl, {
      selectors: {
        target: targetSelector,
        control: "[data-mixitup-control]",
        // BUGFIX: mixitup conflicts w/ bootstrap modal REF: https://stackoverflow.com/a/42454198/5844090
      },
      load: {
        // Ensure that the mixer's initial filter matches the URL on startup
        // if func returns false, then set filter to default
        filter: getSelectorFromParam() ? getSelectorFromParam() : ".vicproj",
      },
      callbacks: {
        onMixEnd: setParams,
        // Call the setParams() method at the end of each operation
      },
    });
  }

  //===========================================
  // vicmod: filter gallery menu, for "filter_gallery"'s menu animation
  //===========================================
  $("#gallery_menu ul li").on("click", function (event) {
    event.preventDefault();
    $(this).siblings().removeClass("active");
    $(this).addClass("active");
  });

  /**
   * Initial assign active menu item based on URL
   *   since filter_gallery's active category could be set by URL
   *   the menu needs to reflect that, because the default active menu is "all"
   *   as it's coded in html
   */

  // get the intended selector from URL
  var currentURL_cata = getSelectorFromParam().replace(/^\./g, "");

  $("#gallery_menu")
    .find("li.active")
    .each(function () {
      // get current 'active' li
      var currentActiveMenu = $(this).attr("data-filter").replace(/^\./g, "");

      if (currentActiveMenu !== currentURL_cata) {
        // remove 'active' from this menu item, if it's not same as URL
        $(this).removeClass("active");

        // assign 'active' to the item the URL specified
        $("#gallery_menu")
          .find("li[data-filter*='." + currentURL_cata + "']")
          .addClass("active");
      }
    });

  //===========================================
  // vicmod: progressbar
  //===========================================

  /* TRIGGER PROGRESS-BAR       | ref: demo_1: waypoint04.html*/
  var waypoint_progressbar = new Waypoint({
    element: document.getElementById("progress-bar"),
    handler: function () {
      var duration = 0;
      var elements = $(".fill");
      elements.each(function () {
        duration =
          1 +
          Math.floor(Math.random() * 20) / 10; /* duration + random 0~1.9  */
        var attr = duration.toString() + "s";
        $(this).css({
          /*animation: `animate-positive ${duration}s`,*/
          animation: "animate-positive " + attr,
          opacity: "1",
        });
      }); // .each
    },
  });

  /* RESET PROGRESS-BAR ONCE REACH BOTTOM       | ref: demo_1: waypoint04.html*/
  var waypoint_reset_progressbar = new Waypoint({
    element: document.getElementById("page-top") /* body's ID */,
    handler: function (direction) {
      if (direction == "up") {
        $(".fill").css({
          animation: "",
          opacity: "0",
        });
      }
    },
    offset:
      "bottom-in-view" /* ref: http://imakewebthings.com/waypoints/api/offset-option/#bottom-in-view */,
  });

  /* RESET PROGRESS-BAR ONCE REACH TOP */
  var waypoint_reset_progressbar_2 = new Waypoint({
    element: document.getElementById("page-top") /* body's ID */,
    handler: function (direction) {
      if (direction == "up") {
        $(".fill").css({
          animation: "",
          opacity: "0",
        });
      } // if
    },
    offset: -100,
  });
})(jQuery); // End of use strict
