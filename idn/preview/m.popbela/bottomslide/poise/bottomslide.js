if(top!=self){
    window.frameElement.style = '-webkit-transition: all .5s linear 0s; -moz-transition: all .5s linear 0s;-ms-transition: all .5s linear 0s;-o-transition: all .5s linear 0s;transition: all .5s linear 0s; height: 480px; position: relative; bottom: 0; left:0; right:0; margin:auto;';
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




const data = parent.document.getElementsByClassName('bottom-sticky-ads__wrapper')[0]
data.style.maxHeight = "480px"























