$(document).ready(function(){
  if($('#homepage-flag').length > 0) {
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



  var story = ['tell stories..', 'inspire..', 'make dreams come true..'];
  var counter = 0;
  var changeStory = document.getElementById('storytelling');

  setInterval(change, 3000);

  function change() {
    changeStory.innerHTML = story[counter];
    counter++;
    if(counter >= story.length) { counter = 0; }
  }
});
