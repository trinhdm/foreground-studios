$(document).ready(function(){
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
