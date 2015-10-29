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

  $(".slider #next").on("click" , function() {
    var currentSlide = $('.active-slide');
    var nextSlide = currentSlide.next('.slide');
    if(nextSlide.length == 0) {
      nextSlide = $('.slide').first();
    }
    currentSlide.fadeOut(600).removeClass('active-slide');
    nextSlide.fadeIn(600).addClass('active-slide');
  });
  $(".slider #next").mousedown(function() {
    $(this).children("*").css('opacity', '1');
    $(this).children("*").css('filter', 'alpha(opacity=100)');
  });
  $(".slider #next").mouseup(function() {
    $(this).children("*").css('opacity', '0.6');
    $(this).children("*").css('filter', 'alpha(opacity=60)');
  });

  $(".slider #prev").click(function() {
    var currentSlide = $('.active-slide');
    var prevSlide = currentSlide.prev('.slide');
    if(prevSlide.length == 0) {
      prevSlide = $('.slide').last();
    }
    currentSlide.fadeOut(600).removeClass('active-slide');
    prevSlide.fadeIn(600).addClass('active-slide');
  });
  $(".slider #prev").mousedown(function() {
    $(this).children("*").css('opacity', '1');
    $(this).children("*").css('filter', 'alpha(opacity=100)');
  });
  $(".slider #prev").mouseup(function() {
    $(this).children("*").css('opacity', '0.6');
    $(this).children("*").css('filter', 'alpha(opacity=60)');
  });

  /* Navbar dropdown menus */
  $( ".dropdown" ).hover(
    function () {
      $( ".submenu", this ).slideDown();
    },
    function () {
      $( ".submenu", this ).stop(true, true).slideUp();
    }
  );

  $("#menu_discussion").click(function() {
    $('html, body').animate({
      scrollTop: $("#discussion").offset().top - 81
    }, 1000);
  });

  $("#menu_calendar").click(function() {
    $('html, body').animate({
      scrollTop: $("#calendar").offset().top - 81
    }, 2000);
  });
  $("#menu_fundraising").click(function() {
    $('html, body').animate({
      scrollTop: $("#fundraising").offset().top - 81
    }, 1000);
  });

  $("#menu_outreach").click(function() {
    $('html, body').animate({
      scrollTop: $("#outreach").offset().top - 81
    }, 2000);
  });

}

$(document).ready(main);