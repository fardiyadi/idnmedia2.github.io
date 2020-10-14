if(top!=self){
    window.frameElement.style = '-webkit-transition: all .5s linear 0s; -moz-transition: all .5s linear 0s;-ms-transition: all .5s linear 0s;-o-transition: all .5s linear 0s;transition: all .5s linear 0s; height: 320px; position: absolute; bottom: 0; left:0; right:0; margin:auto;';
}

$('#mastheadsticky').animate({'height':'45px'},"slow");
$('.ms_big').animate({'height':'0px'},"slow");
$('.ms_small').fadeIn('slow');

$('.ms_small').click(function() {
    if(top!=self){
        window.frameElement.style.height = '320px';
    }
    $('#mastheadsticky').animate({'height':'320px'},"slow");
    document.getElementById("Vms").play();
    $('.ms_small').animate({'height':'0px'},"slow");
    $('.ms_big').fadeIn('slow');
});
$('.close_big').click(function() {
    if(top!=self){
        window.frameElement.style.height = '65px';
    }
    document.getElementById("Vms").pause();
    $('#mastheadsticky').animate({'height':'65px'},"slow");
    $('.ms_small').animate({'height':'50px'},"slow");
    $('.ms_big').fadeOut('slow');
});
$(".close_ms").click(function () {
    $("#mastheadsticky").css("display", "none");
});

setTimeout(function(){ 
    if(top!=self){
        window.frameElement.style.height = '320px';
    }
    $('#mastheadsticky').animate({'height':'320px'},"slow");
    $('.ms_small').animate({'height':'0px'},"slow");
    $('.ms_big').fadeIn('slow');
}, 4000);

setTimeout(function(){
  document.getElementById("Vms").play();
}, 5000);





























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




