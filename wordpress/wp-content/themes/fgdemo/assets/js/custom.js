$(document).ready(function(){

  // changes contact-info div if window is phone/tablet
  if($('#contact-flag').length > 0) {


    $(window).resize(function () { //put your code in window.resize so that it runs when ever window is resized
        if ($(window).width() < 992) {
          $('#contact-info').replaceWith('<div class="row" id="info-resized"><h2>Our info</h2><div class="col-sm-1 col-xs-12"><i class="fa fa-phone fa-3x fa-contact"></i></div><div class="col-sm-3 col-xs-12"><b>Phone</b><br> (xxx)-xxx-xxxx </div><div class="col-sm-1 col-xs-12"><i class="fa fa-location-arrow fa-3x fa-contact"></i></div><div class="col-sm-3 col-xs-12"><b>Address</b><br>42 Wallaby Way<br>Sydney, Australia</div><div class="col-sm-1 col-xs-12"><i class="fa fa-envelope fa-3x fa-contact"></i></div><div class="col-sm-3 col-xs-12"><b>Email</b><br> support(at)<br>foregroundusa.com</div>');
        }

    }).resize(); //call resize function


  }

  if($('#homepage-flag').length > 0) {
    // var story = ['tell stories..', 'inspire..', 'make dreams come true..'];
    // var counter = 0;
    // var changeStory = document.getElementById('storytelling');
    //
    // setInterval(change, 3000);
    //
    // function change() {
    //   changeStory.innerHTML = story[counter];
    //   counter++;
    //   if(counter >= story.length) { counter = 0; }
    // }

    $(window).bind('scroll', function() {
        var navHeight = $( window ).height() - 50;
        $('nav').addClass('fixed-bot');

        if ($(window).scrollTop() > navHeight) {
          $('nav').addClass('navbar-fixed-top');
          $('nav').removeClass('fixed-bot');
        }   else {
              $('nav').removeClass('navbar-fixed-top');
            }
    });
  }    else {
        $('nav').removeClass('fixed-bot');
        $('nav').addClass('fixed-top');
      }
});
