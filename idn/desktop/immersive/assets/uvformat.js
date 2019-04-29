var immersive = function(){
    parent.document.body.style = 'background: url(https://cdnstatic.detik.com/live/html5/yamaha/2018_April/4/bg.jpg) fixed no-repeat center 0px';
    window.parent.document.getElementById('headline').style = 'background-color: white;';
    window.parent.document.getElementsByClassName("wrapper-trending")[0].style.backgroundColor = "white";
    window.parent.document.getElementsByClassName("left-content")[0].style.backgroundColor = "white";
    window.parent.document.getElementsByClassName("right-content")[0].style.backgroundColor = "white";
};

$(document).ready(function(){
    setTimeout(function(){ 
           immersive();
        }, 1000);
});
