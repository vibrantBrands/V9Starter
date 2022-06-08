$(document).ready(function() {
  if (!window.document.documentMode) {
    const menu = new Mmenu( "#main-navigation", {
      "extensions": [
        "pagedim-black",
        "position-right"
      ],
      navbars: [
        {
          height: 4,
          content: [
              "close"
          ]
        }
      ]
    }, {
      offCanvas: {
        clone: true
      }
    });

    const api = menu.API;

    $('#open-menu-drawer').on('click', function() {
      api.open();
    });

    $('.mm-wrapper__blocker, .mm-btn--close').on('click', function() {
      api.close();
    });
  }

  try {
    const swiper = new Swiper('.swiper-container', {
      slidesPerView: 1,
      spaceBetween: 40,

      loop: true,
      centeredSlides: false,

      speed: 4500,

      autoplay: {
          delay: 557000,
          disableOnInteraction: false,
      },

      breakpoints: {
          768: {
            slidesPerView: 2,
          },
          980: {
            slidesPerView: 3,
          },
      },

      on: {
        afterInit: function () {
          $('.swiper-load-fix').show();
          this.update();
        },
      },

    });
  } catch (error) { }

  try {
    const swiper = new Swiper('.swiper-gallery', {
      slidesPerView: 1,
      spaceBetween: 24,

      loop: true,
      centeredSlides: true,

      speed: 1200,

      navigation: {
        nextEl: '.arrow-right',
        prevEl: '.arrow-left'
      },

      autoplay: {
          delay: 100500,
          disableOnInteraction: false,
      },

      breakpoints: {
          768: {
            slidesPerView: 2,
            centeredSlides: false
          },
          980: {
            slidesPerView: 3,
            centeredSlides: false
          },
          1180: {
            slidesPerView: 4,
            centeredSlides: false
          },
      },

      on: {
        afterInit: function () {
          $('.swiper-load-fix').show();
          this.update();
        },
      },

    });
  } catch (error) { }

  $('.video-modal').magnificPopup({
    disableOn: 300,
    type: 'iframe',
    mainClass: 'mfp-fade',
    removalDelay: 160,
    preloader: false,
    fixedContentPos: false
  });

  AOS.init();
});