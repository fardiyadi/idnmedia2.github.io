// smooth scroll

jQuery(document).ready(function($) {
  $("#scroll").click(function(event) {
    event.preventDefault();
    var x = $(this).offset().top;
    $('html,body').animate({scrollTop: x - 0 }, 1500);
  });
})


// search filter

function myFunctionSearch() {
    var input, filter, ul, li, i, txtValue;
    input = document.getElementById("myInput");
    filter = input.value.toUpperCase();
    ul = document.getElementById("myUL");
    li = ul.getElementsByTagName("li");
    for (i = 0; i < li.length; i++) {
        a = li[i].getElementsByTagName("a")[0];
        txtValue = a.textContent || a.innerText;
        if (txtValue.toUpperCase().indexOf(filter) > -1) {
            li[i].style.display = "";
        } else {
            li[i].style.display = "none";
        }
    }
}

jQuery(document).ready(function(){
    jQuery('#myInput').click(function(event){
        jQuery('#myUL').addClass('aktif');
        jQuery('.search-over-bg').addClass('aktif');
        jQuery('body').addClass('overHide');
        event.preventDefault();
    });
    jQuery('.search-over-bg').click(function(event){
        jQuery('#myUL').removeClass('aktif');
        jQuery('.search-over-bg').removeClass('aktif');
        jQuery('body').removeClass('overHide');
        event.preventDefault();
    });

});


// Lazy load image

document.addEventListener("DOMContentLoaded", function() {
  let lazyImages = [].slice.call(document.querySelectorAll("img.lazy"));
  let active = false;

  const lazyLoad = function() {
    if (active === false) {
      active = true;

      setTimeout(function() {
        lazyImages.forEach(function(lazyImage) {
          if ((lazyImage.getBoundingClientRect().top <= window.innerHeight && lazyImage.getBoundingClientRect().bottom >= 0) && getComputedStyle(lazyImage).display !== "none") {
            lazyImage.src = lazyImage.dataset.src;
            lazyImage.srcset = lazyImage.dataset.srcset;
            lazyImage.classList.remove("lazy");

            lazyImages = lazyImages.filter(function(image) {
              return image !== lazyImage;
            });

            if (lazyImages.length === 0) {
              document.removeEventListener("scroll", lazyLoad);
              window.removeEventListener("resize", lazyLoad);
              window.removeEventListener("orientationchange", lazyLoad);
            }
          }
        });

        active = false;
      }, 200);
    }
  };

  document.addEventListener("scroll", lazyLoad);
  window.addEventListener("resize", lazyLoad);
  window.addEventListener("orientationchange", lazyLoad);
});

// end lazy load image

//for showing aticle base on key class
var $btns = $('.key').click(function() {
  if (this.id == '') {
    $('#allArticle > div').fadeIn(450);
  } else {
    var $el = $('.' + this.id).fadeIn(450);
    $('#allArticle > div').not($el).hide();
  }
})

// aktif class onclick
jQuery(document).ready(function(){
    jQuery('#keyA').click(function(event){
        jQuery('.aktif').removeClass('aktif');
        jQuery('.showing').removeClass('showing');
        jQuery(this).addClass('aktif');   
        jQuery('.keyA').addClass('aktif');      
        jQuery('.keyGlobal').addClass('dnone');      
        jQuery('.A').addClass('showing');      
        event.preventDefault();
    });
    jQuery('#keyB').click(function(event){
        jQuery('.aktif').removeClass('aktif');
        jQuery('.showing').removeClass('showing');
        jQuery(this).addClass('aktif');   
        jQuery('.keyB').addClass('aktif');  
        jQuery('.keyGlobal').addClass('dnone');      
        jQuery('.B').addClass('showing'); 
        event.preventDefault();
    });
    jQuery('#keyC').click(function(event){
        jQuery('.aktif').removeClass('aktif');
        jQuery('.showing').removeClass('showing');
        jQuery(this).addClass('aktif');   
        jQuery('.keyC').addClass('aktif');  
        jQuery('.keyGlobal').addClass('dnone');      
        jQuery('.C').addClass('showing'); 
        event.preventDefault();
    });
    jQuery('#keyD').click(function(event){
        jQuery('.aktif').removeClass('aktif');
        jQuery('.showing').removeClass('showing');
        jQuery(this).addClass('aktif');   
        jQuery('.keyD').addClass('aktif');  
        jQuery('.keyGlobal').addClass('dnone');      
        jQuery('.D').addClass('showing'); 
        event.preventDefault();
    });
});



// link parameter ** cancel

//function getParameterByName(name, url) {
//    if (!url) url = window.location.href;
//    name = name.replace(/[\[\]]/g, "\\$&");
//    var regex = new RegExp("[?&]" + name + "(=([^&#]*)|&|#|$)"),
//        results = regex.exec(url);
//    if (!results) return null;
//    if (!results[2]) return '';
//    return decodeURIComponent(results[2].replace(/\+/g, " "));
//}
//var dynamicContent = getParameterByName('issue');
//$(document).ready(function() {
//    if (dynamicContent == '1') {
//        $('#map1').show();
//        $('#detail1').show();
//    }
//    else if (dynamicContent == '2') {
//        $('#map2').show();
//        $('#detail2').show();
//    }
//    else {
//        $('#default').show();
//    }
//});

// end link parameter

// read more

//function myFunctionmore() {
//    var moreText = document.getElementById("more");
//    var btnText = document.getElementsByClassName("myBtn");
//    var desc = document.getElementsByClassName("desc");
//
//  if (moreText.style.height === "60vh") {
//      moreText.style.height = "100px";
//      btnText.innerHTML = "Read more"; 
//      
//  } else {
//      moreText.style.height = "60vh";
//      btnText.innerHTML = "Read less"; 
//  }
//}


$('.toggle').click(function(e) {
    e.preventDefault();

    var $this = $(this);

    if ($this.prev().hasClass('expand')) {
        $this.prev().removeClass('expand');
        this.innerHTML = "Read more";

    } else {
        $this.prev().toggleClass('expand');
        this.innerHTML = "Read less";
    }
});













