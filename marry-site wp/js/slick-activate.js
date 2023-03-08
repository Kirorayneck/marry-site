$(document).ready(function () {
    /* Слайдер */
    $('.gallery-block').slick({
      variableWidth: true,
      centerMode: true,
      autoplay: true,
      autoplaySpeed: 2000,
      slidesToShow: 3,
      slidesToScroll: 1,
      prevArrow: $('unslick'),
      nextArrow: $('unslick'),
      dots: false,
      responsive: [{
          breakpoint: 1200,
          settings: {
            slidesToShow: 3,
            slidesToScroll: 1
          }
        },
        {
          breakpoint: 991,
          settings: {
          centerMode: false,
          autoplay: false,
          slidesToShow: 3,
          slidesToScroll: 1
        }
        },
        {
          breakpoint: 768,
            settings: {
            centerMode: false,
            autoplay: false,
            slidesToShow: 3,
            slidesToScroll: 1
            }
        },
        {
          breakpoint: 572,
            settings: {
            centerMode: false,
            variableWidth: false,
            autoplay: false,
            fade: true,
            cssEase: 'linear',
            slidesToShow: 1,
            slidesToScroll: 1
          }
        }
      ]
    });
  });