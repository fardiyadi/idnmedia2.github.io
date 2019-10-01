if(top!=self){
    window.frameElement.style = '-webkit-transition: all .5s linear 0s; -moz-transition: all .5s linear 0s;-ms-transition: all .5s linear 0s;-o-transition: all .5s linear 0s;transition: all .5s linear 0s; height: 480px; position: fixed; bottom: 0; left:0; right:0; margin:auto;';
}

$('#bottom_slide').animate({'height':'480px'},"slow");
$('.bs_sticky').animate({'height':'0px'},"slow");
$('.bs_ad').fadeIn('slow');

$('.bs_sticky').click(function() {
    if(top!=self){
        window.frameElement.style.height = '480px';
    }
    $('#bottom_slide').animate({'height':'480px'},"slow");
    $('.bs_sticky').animate({'height':'0px'},"slow");
    $('.bs_ad').fadeIn('slow');
});
$('.close_bs').click(function() {
    if(top!=self){
        window.frameElement.style.height = '50px';
    }
    $('#bottom_slide').animate({'height':'50px'},"slow");
    $('.bs_sticky').animate({'height':'50px'},"slow");
    $('.bs_ad').fadeOut('slow');
});































//
//var expandOverlay = function(){
//    if(top!=self){
//         window.frameElement.style = '-webkit-transition: all .5s linear 0s; -moz-transition: all .5s linear 0s;-ms-transition: all .5s linear 0s;-o-transition: all .5s linear 0s;transition: all .5s linear 0s; height: 100vh; width: 100vw; position: fixed; left:0; right: 0; margin: auto; top: 50%; transform: translateY(-50%);'; 
//    };
//    $("#bs02").css({"display" : "block"});
//}
//
//var closeExpandOverlay = function(){
//    if(top!=self){
//         window.frameElement.style = '-webkit-transition: all .5s linear 0s; -moz-transition: all .5s linear 0s;-ms-transition: all .5s linear 0s;-o-transition: all .5s linear 0s;transition: all .5s linear 0s; height: 50px; width: 320px; position: fixed; left:0; right: 0; margin: auto; bottom: 0;'; 
//    };
//    $("#bs02").css({"display" : "none"});
//}
//
//
//
//
//
//$('#bs01').click(function() {
//    if(top!=self){
//        window.frameElement.style = '-webkit-transition: all .5s linear 0s; -moz-transition: all .5s linear 0s;-ms-transition: all .5s linear 0s;-o-transition: all .5s linear 0s;transition: all .5s linear 0s; height: 100vh; width: 100vw; position: fixed; left:0; right: 0; margin: auto; top: 50%; transform: translateY(-50%);'; 
//    }
//     $("#bs02").css({"display" : "block"});
//});
//$('.closeBtn02').click(function() {
//    if(top!=self){
//        window.frameElement.style = '-webkit-transition: all .5s linear 0s; -moz-transition: all .5s linear 0s;-ms-transition: all .5s linear 0s;-o-transition: all .5s linear 0s;transition: all .5s linear 0s; height: 50px; width: 320px; position: fixed; left:0; right: 0; margin: auto; bottom: 0;'; 
//    }
//    $("#bs02").css({"display" : "none"});
//});










//$(document).ready(function(){
//    setTimeout(function(){ 
//        expandOverlay();
//    }, 1000);  
//     setTimeout(function(){ 
//        closeExpandOverlay();
//    }, 3000); 
//});
//
//




