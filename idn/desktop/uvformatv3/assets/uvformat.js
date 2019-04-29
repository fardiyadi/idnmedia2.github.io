if(top!=self){
    window.frameElement.style = 'width: 1130px; height: calc(100vh - 90px); z-index: 99;';
};

var expandUV_ftol = function(){
    if(top!=self){
        window.frameElement.style = '-webkit-transition: all .5s linear 0s; -moz-transition: all .5s linear 0s;-ms-transition: all .5s linear 0s;-o-transition: all .5s linear 0s;transition: all .5s linear 0s; width: 1130px; height: calc(100vh - 50px); z-index: 99; position: relative; margin-left: -1090px; top: -50px';
    };
    parent.document.body.style = '-webkit-transition: all .5s linear 0s; -moz-transition: all .5s linear 0s;-ms-transition: all .5s linear 0s;-o-transition: all .5s linear 0s;transition: all .5s linear 0s; overflow-y: hidden; margin-left: -2600px;';
    
    $("#btnExpandUV").css({"display" : "none"});
    $(".uv_ads").css({"filter" : "blur(0px)"," -webkit-filter" : "blur(0px)"});
}

var closeUV = function(){
    if(top!=self){
        window.frameElement.style = '-webkit-transition: all .5s linear 0s; -moz-transition: all .5s linear 0s;-ms-transition: all .5s linear 0s;-o-transition: all .5s linear 0s;transition: all .5s linear 0s; position: fixed; margin-left: 0; width: 1030px;';
    };
    parent.document.body.style = '-webkit-transition: all .5s linear 0s; -moz-transition: all .5s linear 0s;-ms-transition: all .5s linear 0s;-o-transition: all .5s linear 0s;transition: all .5s linear 0s; overflow-y: scroll; margin-left: 0;';
    $(".uv_ads").css({"filter" : "blur(5px)"," -webkit-filter" : "blur(5px)"});
    $("#btnExpandUV").css({"display" : "block"});
}

$(document).ready(function(){
    setTimeout(function(){ 
        expandUV_ftol();
    }, 5000);  
     setTimeout(function(){ 
        closeUV();
    }, 9000); 
});






