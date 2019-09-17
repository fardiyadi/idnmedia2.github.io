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

// aktif class
jQuery(document).ready(function(){
    jQuery('#key1A').click(function(event){
        jQuery('.aktif').removeClass('aktif');
        jQuery(this).addClass('aktif');   
        jQuery('.key1A').addClass('aktif');   
        event.preventDefault();
    });
    jQuery('#key1B').click(function(event){
        jQuery('.aktif').removeClass('aktif');
        jQuery(this).addClass('aktif');   
        jQuery('.key1B').addClass('aktif');   
        event.preventDefault();
    });
    jQuery('#key1C').click(function(event){
        jQuery('.aktif').removeClass('aktif');
        jQuery(this).addClass('aktif');   
        jQuery('.key1C').addClass('aktif');   
        event.preventDefault();
    });
});




// link parameter

function getParameterByName(name, url) {
    if (!url) url = window.location.href;
    name = name.replace(/[\[\]]/g, "\\$&");
    var regex = new RegExp("[?&]" + name + "(=([^&#]*)|&|#|$)"),
        results = regex.exec(url);
    if (!results) return null;
    if (!results[2]) return '';
    return decodeURIComponent(results[2].replace(/\+/g, " "));
}
var dynamicContent = getParameterByName('issue');
$(document).ready(function() {
    if (dynamicContent == '1') {
        $('#map1').show();
        $('#detail1').show();
    }
    else {
        $('#map6').show();
    }
});

// end link parameter

// read more

function myFunctionmore() {
  var moreText = document.getElementById("more");
  var btnText = document.getElementById("myBtn");

  if (moreText.style.height === "auto") {
    moreText.style.height = "100px";
    btnText.innerHTML = "Read more"; 
  } else {
    moreText.style.height = "auto";
    btnText.innerHTML = "Read less"; 
  }
}
















