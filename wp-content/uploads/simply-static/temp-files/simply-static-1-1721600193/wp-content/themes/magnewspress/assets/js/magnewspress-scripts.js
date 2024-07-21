(function ($) {
  "use strict";
  //Loading AOS animation with css class

  //fade animation
  $(".magnewspress-fade-up").attr({
    "data-aos": "fade-up",
  });
  $(".magnewspress-fade-down").attr({
    "data-aos": "fade-down",
  });
  $(".magnewspress-fade-left").attr({
    "data-aos": "fade-left",
  });
  $(".magnewspress-fade-right").attr({
    "data-aos": "fade-right",
  });
  $(".magnewspress-fade-up-right").attr({
    "data-aos": "fade-up-right",
  });
  $(".magnewspress-fade-up-left").attr({
    "data-aos": "fade-up-left",
  });
  $(".magnewspress-fade-down-right").attr({
    "data-aos": "fade-down-right",
  });
  $(".magnewspress-fade-down-left").attr({
    "data-aos": "fade-down-left",
  });

  //slide animation
  $(".magnewspress-slide-left").attr({
    "data-aos": "slide-left",
  });
  $(".magnewspress-slide-right").attr({
    "data-aos": "slide-right",
  });
  $(".magnewspress-slide-up").attr({
    "data-aos": "slide-up",
  });
  $(".magnewspress-slide-down").attr({
    "data-aos": "slide-down",
  });

  //zoom animation
  $(".magnewspress-zoom-in").attr({
    "data-aos": "zoom-in",
  });
  $(".magnewspress-zoom-in-up").attr({
    "data-aos": "zoom-in-up",
  });
  $(".magnewspress-zoom-in-down").attr({
    "data-aos": "zoom-in-down",
  });
  $(".magnewspress-zoom-in-left").attr({
    "data-aos": "zoom-in-left",
  });
  $(".magnewspress-zoom-in-right").attr({
    "data-aos": "zoom-in-right",
  });
  $(".magnewspress-zoom-out").attr({
    "data-aos": "zoom-out",
  });
  $(".magnewspress-zoom-out-up").attr({
    "data-aos": "zoom-out-up",
  });
  $(".magnewspress-zoom-out-down").attr({
    "data-aos": "zoom-out-down",
  });
  $(".magnewspress-zoom-out-left").attr({
    "data-aos": "zoom-out-left",
  });
  $(".magnewspress-zoom-out-right").attr({
    "data-aos": "zoom-out-right",
  });

  //flip animation
  $(".magnewspress-flip-up").attr({
    "data-aos": "flip-up",
  });
  $(".magnewspress-flip-down").attr({
    "data-aos": "flip-down",
  });
  $(".magnewspress-flip-left").attr({
    "data-aos": "flip-left",
  });
  $(".magnewspress-flip-right").attr({
    "data-aos": "flip-right",
  });

  //animation ease attributes
  $(".magnewspress-linear").attr({
    "data-aos-easing": "linear",
  });
  $(".magnewspress-ease").attr({
    "data-aos-easing": "ease",
  });
  $(".magnewspress-ease-in").attr({
    "data-aos-easing": "ease-in",
  });
  $(".magnewspress-ease-in-back").attr({
    "data-aos-easing": "ease-in-back",
  });
  $(".magnewspress-ease-out").attr({
    "data-aos-easing": "ease-out",
  });
  $(".magnewspress-ease-out-back").attr({
    "data-aos-easing": "ease-out-back",
  });
  $(".magnewspress-ease-in-out-back").attr({
    "data-aos-easing": "ease-in-out-back",
  });
  $(".magnewspress-ease-in-shine").attr({
    "data-aos-easing": "ease-in-shine",
  });
  $(".magnewspress-ease-out-shine").attr({
    "data-aos-easing": "ease-out-shine",
  });
  $(".magnewspress-ease-in-out-shine").attr({
    "data-aos-easing": "ease-in-out-shine",
  });
  $(".magnewspress-ease-in-quad").attr({
    "data-aos-easing": "ease-in-quad",
  });
  $(".magnewspress-ease-out-quad").attr({
    "data-aos-easing": "ease-out-quad",
  });
  $(".magnewspress-ease-in-out-quad").attr({
    "data-aos-easing": "ease-in-out-quad",
  });
  $(".magnewspress-ease-in-cubic").attr({
    "data-aos-easing": "ease-in-cubic",
  });
  $(".magnewspress-ease-out-cubic").attr({
    "data-aos-easing": "ease-out-cubic",
  });
  $(".magnewspress-ease-in-out-cubic").attr({
    "data-aos-easing": "ease-in-out-cubic",
  });
  $(".magnewspress-ease-in-quart").attr({
    "data-aos-easing": "ease-in-quart",
  });
  $(".magnewspress-ease-out-quart").attr({
    "data-aos-easing": "ease-out-quart",
  });
  $(".magnewspress-ease-in-out-quart").attr({
    "data-aos-easing": "ease-in-out-quart",
  });

  setTimeout(function () {
    AOS.init({
      once: true,
      duration: 1200,
    });
  }, 100);

  $(window).scroll(function () {
    var scrollTop = $(this).scrollTop();
    var mightyBuildersStickyMenu = $(".magnewspress-sticky-menu");
    var mightyBuildersStickyNavigation = $(".magnewspress-sticky-navigation");

    if (mightyBuildersStickyMenu.length && scrollTop > 0) {
      mightyBuildersStickyMenu.addClass("sticky-menu-enabled magnewspress-zoom-in-up");
    } else {
      mightyBuildersStickyMenu.removeClass("sticky-menu-enabled");
    }
  });
  jQuery(window).scroll(function () {
    if (jQuery(this).scrollTop() > 100) {
      jQuery(".magnewspress-scrollto-top a").fadeIn();
    } else {
      jQuery(".magnewspress-scrollto-top a").fadeOut();
    }
  });
  jQuery(".magnewspress-scrollto-top a").click(function () {
    jQuery("html, body").animate({ scrollTop: 0 }, 600);
    return false;
  });

  // Function to check if an element is in the viewport
  function isElementInViewport(el) {
    var rect = el.getBoundingClientRect();
    return rect.top >= 0 && rect.left >= 0 && rect.bottom <= (window.innerHeight || document.documentElement.clientHeight) && rect.right <= (window.innerWidth || document.documentElement.clientWidth);
  }

  // Function to start counter animation when element is in viewport
  function startCounterAnimation() {
    $(".magnewspress-number-counter")
      .not(".counted")
      .each(function () {
        if (isElementInViewport(this)) {
          var $this = $(this);
          $this
            .addClass("counted")
            .prop("Counter", 0)
            .animate(
              {
                Counter: $this.text(),
              },
              {
                duration: 1000,
                easing: "swing",
                step: function (now) {
                  $this.text(Math.ceil(now));
                },
              }
            );
        }
      });
  }

  // Check if element is in viewport on page load
  $(document).ready(function () {
    startCounterAnimation();
  });

  // Check if element is in viewport on scroll
  $(window).on("scroll", function () {
    startCounterAnimation();
  });

  var magnewspressTicker = new Swiper(".magnewspress-ticker", {
    slidesPerView: 1,
    spaceBetween: 20,
    autoplay: {
      delay: 2500,
      disableOnInteraction: false,
    },
  });
  var magnewspressSlider = new Swiper(".magnewspress-slider", {
    slidesPerView: 1,
    spaceBetween: 20,
    autoplay: {
      delay: 5000,
      disableOnInteraction: false,
    },
    pagination: {
      el: ".magnewspress-pagination",
      clickable: true,
    },
    navigation: {
      nextEl: ".magnewspress-button-next",
      prevEl: ".magnewspress-button-prev",
    },
    // Add more options as needed
  });
  $(".magnewspress-swiper-holder").find(".wp-block-post").addClass("swiper-slide");
})(jQuery);
