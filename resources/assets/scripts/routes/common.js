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
  },
  finalize() {
    // JavaScript to be fired on all pages, after page specific JS is fired
  }
};
