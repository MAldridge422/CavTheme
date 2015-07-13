var main = function() {

  /* Slider change */
  setInterval(function () {
    var currentSlide = $('.active-slide');
    var nextSlide = currentSlide.next();   
    if(nextSlide.length == 0) {
      nextSlide = $('.slide').first();
    }        
    currentSlide.fadeOut(600).removeClass('active-slide');
    nextSlide.fadeIn(600).addClass('active-slide');
  }, 6190);

  /* Navbar dropdown menus */
  $( ".dropdown" ).hover(
    function () {
      $( ".submenu", this ).slideDown();
    },
    function () {
      $( ".submenu", this ).stop(true, true).slideUp();
    }
  );
}

$(document).ready(main);