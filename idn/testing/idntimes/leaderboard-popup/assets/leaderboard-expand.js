if(top!=self){ window.frameElement.style = '-webkit-transition: all .5s linear 0s; -moz-transition: all .5s linear 0s;-ms-transition: all .5s linear 0s;-o-transition: all .5s linear 0s;transition: all .5s linear 0s; position: fixed; z-index: 9; top: 0; left: 0; right: 0; margin: auto; background: rgba(0,0,0,.7); width: 100%;'; }
$('#leaderboard_expand').animate({'height':'100%'},"slow");

if(top!=self){ window.frameElement.style.height = '100%'; }
$('.leaderboard_small').animate({'height':'0px'},"slow");
$('.leaderboard_big').fadeIn('slow');

$('.leaderboard_small').click(function() {
    if(top!=self){ window.frameElement.style.height = '100%'; }
    $('#leaderboard_expand').animate({'height':'100%'},"slow");
    $('.leaderboard_small').animate({'height':'0px'},"slow");
    $('.leaderboard_big').fadeIn('slow');
});
$('.close_big').click(function() {
    if(top!=self){ window.frameElement.style.height = '100px'; }
    $('.leaderboard_small').animate({'height':'100px'},"slow");
    $('#leaderboard_expand').animate({'height':'100px'},"slow");
    $('.leaderboard_big').fadeOut('slow');
});





