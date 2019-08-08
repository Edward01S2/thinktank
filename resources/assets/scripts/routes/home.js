export default {
  init() {
    // JavaScript to be fired on the home page
    $(".accordion-btn").on("click", function() {
      var $item = $(this).closest('.accordion-container')
      $item.find('.accordion-content').slideToggle()
      $item.siblings().find('.accordion-content').slideUp()
      $(this).toggleClass('opened')
    });
  },
  finalize() {
    // JavaScript to be fired on the home page, after the init JS
  },
};
