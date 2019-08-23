export default {
  init() {
    // JavaScript to be fired on the home page
    $('.staff-slider').slick({
      arrows: false,
      dots: true,
      appendDots: ".append-dots",
      mobileFirst: true,
      responsive: [
        {
          breakpoint: 767,
          settings: "unslick" 
        }
      ]
    });

    $('.gallery').slick({
      infinite: true,
      autoplay: true,
      autoplaySpeed: 4000,
      slidesToShow: 1,
      nextArrow: '.next',
      prevArrow: '.prev',
      mobileFirst: true,
      responsive: [
        {
          breakpoint: 768,
          settings: {
            slidesToShow: 2,
          }
        },
        {
          breakpoint: 1024,
          settings: {
            slidesToShow: 2,
            centerMode: true,
          }
        },
        {
          breakpoint: 1280,
          settings: {
            slidesToShow: 3,
            centerMode: true,
          }
        },
      ]
    });
  },
  finalize() {
    // JavaScript to be fired on the home page, after the init JS
  },
};
