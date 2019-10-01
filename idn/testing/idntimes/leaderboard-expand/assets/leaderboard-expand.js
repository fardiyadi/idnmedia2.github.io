if(top!=self){ window.frameElement.style = '-webkit-transition: all .5s linear 0s; -moz-transition: all .5s linear 0s;-ms-transition: all .5s linear 0s;-o-transition: all .5s linear 0s;transition: all .5s linear 0s;'; }
$('#leaderboard_expand').animate({'height':'400px'},"slow");

if(top!=self){ window.frameElement.style.height = '400px'; }
$('.leaderboard_small').animate({'height':'0px'},"slow");
$('.leaderboard_big').fadeIn('slow');

$(document).ready(function() {
    $('.leaderboard_small').click(function() {
        if(top!=self){ window.frameElement.style.height = '400px'; }
        $('#leaderboard_expand').animate({'height':'400px'},"slow");
        $('.leaderboard_small').animate({'height':'0px'},"slow");
        $('.leaderboard_big').fadeIn('slow');
    });
    
    $('.close_big').click(function() {
        if(top!=self){ window.frameElement.style.height = '100px'; }
        $('.leaderboard_small').animate({'height':'100px'},"slow");
        $('#leaderboard_expand').animate({'height':'100px'},"slow");
        $('.leaderboard_big').fadeOut('slow');
    });
});