export default {
  init() {
    // JavaScript to be fired on the home page
    $('.feat-staff').slick({
      arrows: false,
      dots: true,
      appendDots: ".append-dots",
      mobileFirst: true,
      autoplay: true,
      autoplaySpeed: 8000,
    });

    $('.featured-on').slick({
      infinite: true,
      autoplay: true,
      autoplaySpeed: 6000,
      slidesToShow: 1,
      nextArrow: '.next',
      prevArrow: '.prev',
      mobileFirst: true,
      responsive: [
        {
          breakpoint: 768,
          settings: {
            slidesToShow: 2,
            centerMode: true,
            variableWidth: true,
          }
        },
        {
          breakpoint: 1024,
          settings: {
            slidesToShow: 3,
            centerMode: true,
          }
        },
        // {
        //   breakpoint: 1280,
        //   settings: {
        //     slidesToShow: 2,
        //     centerMode: true,
        //   }
        // },
      ]
    });
  },
  finalize() {
    // JavaScript to be fired on the home page, after the init JS
  },
};
