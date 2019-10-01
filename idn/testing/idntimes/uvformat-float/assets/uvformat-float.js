// update 9 mei 2019
// JS UV Format mobile IDN Times


if(top!=self){
    window.frameElement.style = 'width: 100%';
    parent.document.body.style = 'padding-top: 100px;';
    window.parent.$('.leaderboard-ads').css({'position':'fixed','top':'0','margin':'auto','z-index':'99'}); 
    window.parent.$('.sticky-header').css({'padding-top':'100px'})
};
$('#btnExpandUV').click(function() {
    if(top!=self){
         window.frameElement.style = '-webkit-transition: all .5s linear 0s; -moz-transition: all .5s linear 0s;-ms-transition: all .5s linear 0s;-o-transition: all .5s linear 0s;transition: all .5s linear 0s; height: 480px; width: 100%';
    }
    $('#uvformat_m').animate({'height':'480px'},"slow");
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






