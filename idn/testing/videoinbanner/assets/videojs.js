videojs.options.flash.swf = "http://vjs.zencdn.net/c/video-js.swf";
var players = ['example_video_1', 'example_video_2'];

window.addEventListener("resize", playVideos, false);
window.addEventListener("scroll", playVideos, false);

// Loop through all the players, check if video player is visible in the viewport. If it is visible, play it. If not, do not play it.
function playVideos() {

    for (var i = 0; i < players.length; i++) 
    {
        var videoPlayer = $('#' + players[i]);
        var videoPlayerElem = _V_('#' + players[i]);

        if (isOnScreen(videoPlayer))
        {
             videoPlayerElem.play();
        }
        else
        {
             videoPlayerElem.pause();
        }     
    }

}

function isOnScreen(element) {
   var elementOffsetTop = element.offset().top;
   var elementHeight = element.height();

   var screenScrollTop = $(window).scrollTop();
   var screenHeight = $(window).height();

   var scrollIsAboveElement = elementOffsetTop + elementHeight - screenScrollTop >= 0;
   var elementIsVisibleOnScreen = screenScrollTop + screenHeight - elementOffsetTop >= 0;

   return scrollIsAboveElement && elementIsVisibleOnScreen;
}