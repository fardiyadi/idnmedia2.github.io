
//
//$('.leaderboard_small').scroll(function() {
//    if(top!=self){ 
//        window.frameElement.style.position = 'fixed'; 
//        window.frameElement.style.top = '0';
//        window.frameElement.style.zIndex = '9';
//        
//    }
//    $('#leaderboard_expand').animate({'height':'400px'},"slow");
//    $('.leaderboard_small').animate({'height':'0px'},"slow");
//    $('.leaderboard_big').fadeIn('slow');
//});
//$('.close_big').click(function() {
//    if(top!=self){ window.frameElement.style.height = '100px'; }
//    $('.leaderboard_small').animate({'height':'100px'},"slow");
//    $('#leaderboard_expand').animate({'height':'100px'},"slow");
//    $('.leaderboard_big').fadeOut('slow');
//});


 if(top!=self) {
     var wrap = $("#leaderboard_expand");
     wrap.on("scroll", function(e) {
    
  if (this.scrollTop > 10) {
        window.frameElement.style.position = 'fixed',
        window.frameElement.style.top = '0',
        window.frameElement.style.zIndex = '9';
  } else {
        window.frameElement.style.position = 'fixed',
        window.frameElement.style.top = '0',
        window.frameElement.style.zIndex = '9';
  }
  
    })
};

//window.onscroll = function() {myFunction()};
//
//var header = document.getElementById("leaderboard_expand");
//var sticky = header.offsetTop;
//
//function myFunction() {
//  if ((window.pageYOffset > 0) || (top!=self)) {
//        window.frameElement.style.position = 'fixed'; 
//        window.frameElement.style.top = '0';
//        window.frameElement.style.zIndex = '9';
//  } else {
//    window.frameElement.style.position = 'fixed'; 
//        window.frameElement.style.top = '0';
//        window.frameElement.style.zIndex = '9';
//  }
//}





