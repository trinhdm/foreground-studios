$(document).ready(function(){
  if($("#homepage-flag").length > 0) {
    $(window).bind('scroll', function() {
        var navHeight = $( window ).height() - 60;

        if ($(window).scrollTop() > navHeight) {
          $('nav').addClass('fixed-top');
        }   else {
              $('nav').removeClass('fixed-top');
            }
    });
  }    else {
        $('nav').removeClass('fixed-bot');
        $('nav').addClass('fixed-top');
      }
});
