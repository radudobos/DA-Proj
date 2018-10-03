(function($) {
  // Site title
  wp.customize('blogname', function(value) {
    value.bind(function(to) {
      $('.navbar-brand').text(to);
    });
  });
})(jQuery);

$('a[href^="#"]').on('click', function(event) {
  var target = $(this.getAttribute('href'));
  if( target.length ) {
      event.preventDefault();
      $('html, body').stop().animate({
          scrollTop: target.offset().top
      }, 1000);
  }
});