if(top!=self){
     window.frameElement.style = 'width: 100%';
}
$('#btnExpandUV').click(function() {
    if(top!=self){
         window.frameElement.style = '-webkit-transition: all .5s linear 0s; -moz-transition: all .5s linear 0s;-ms-transition: all .5s linear 0s;-o-transition: all .5s linear 0s;transition: all .5s linear 0s; height: 380px; width: 100%';
    }
    $('#uvformat_m').animate({'height':'380px'},"slow");
    $('.uv_banner').animate({'height':'0px'},"slow");
    $('.uv_ads_container').fadeIn('slow');
    $("#btnExpandUV").css({"display" : "none"});
    $("#btnCloseUV").css({"display" : "block"});
    
});
$('#btnCloseUV').click(function() {
    if(top!=self){
        window.frameElement.style = '-webkit-transition: all .5s linear 0s; -moz-transition: all .5s linear 0s;-ms-transition: all .5s linear 0s;-o-transition: all .5s linear 0s;transition: all .5s linear 0s; height: 100px; width: 100%';
    }
    $('#uvformat_m').animate({'height':'100px'},"slow");
    $('.uv_banner').animate({'height':'100px'},"slow");
    $('.uv_ads_container').fadeOut('slow');
    $("#btnExpandUV").css({"display" : "block"});
    $("#btnCloseUV").css({"display" : "none"});
});






