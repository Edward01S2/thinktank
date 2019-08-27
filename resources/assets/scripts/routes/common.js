export default {
  init() {
    $("#nav-toggle").click(function() {
      $("#main-nav").toggle();
      $("main").toggleClass("blur");
    });

    $(".accordion-btn").on("click", function() {
      var $item = $(this).closest('.accordion-container')
      $item.find('.accordion-content').slideToggle()
      $item.siblings().find('.accordion-content').slideUp()
      $(this).toggleClass('opened')
    });

    $(".client-portal a").prepend('<span class="pr-2"><svg class="h-4 w-4 fill-current" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20"><path d="M10 20a10 10 0 1 1 0-20 10 10 0 0 1 0 20zm-5.6-4.29a9.95 9.95 0 0 1 11.2 0 8 8 0 1 0-11.2 0zm6.12-7.64l3.02-3.02 1.41 1.41-3.02 3.02a2 2 0 1 1-1.41-1.41z"/></svg></span>');

    $('.gallery').slick({
      infinite: true,
      autoplay: true,
      autoplaySpeed: 6000,
      slidesToShow: 1,
      nextArrow: '.next',
      prevArrow: '.prev',
      mobileFirst: true,
      lazyLoad: 'progressive',
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
    // JavaScript to be fired on all pages, after page specific JS is fired
  }
};
