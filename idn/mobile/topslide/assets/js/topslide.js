//function addClass(el, className) {
//    var el = document.querySelectorAll(el);
//    
//    for (i = 0; i < el.length; i++) {
//      if (el.classList) {
//        el[i].classList.add(className);
//      } else {
//        el[i].className += ' ' + className;
//      }
//    }
//}
//
//
//function removeClass(el, className) {
//    var el = document.querySelectorAll(el);
//    
//    for (i = 0; i < el.length; i++) {
//
//      if (el[i].classList) {
//        el[i].classList.remove(className);
//      } else {
//        el[i].className = el.className.replace(new RegExp('(^|\\b)' + className.split(' ').join('|') + '(\\b|$)', 'gi'), ' ');
//      }
//    }
//}


function show_big() {
   var element = document.getElementById("big");
   element.classList.add("show_big_ads");
    $('body').css('overflow', 'hidden');
}
function remove_big() {
   var element = document.getElementById("big");
   element.classList.remove("show_big_ads");
    $('body').css('overflow', 'scroll');
}