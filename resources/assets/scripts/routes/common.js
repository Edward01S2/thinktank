export default {
  init() {
    $("#nav-toggle").click(function() {
      $("#main-nav").toggle();
    });
  },
  finalize() {
    // JavaScript to be fired on all pages, after page specific JS is fired
  }
};
