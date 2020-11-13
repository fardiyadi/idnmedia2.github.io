// parallax cursor versi 2

var timeout;
$('#paraContainer').mousemove(function(e){
  if(timeout) clearTimeout(timeout);
  setTimeout(callParallax.bind(null, e), 200);
  
});

function callParallax(e){
//  parallaxIt(e, '.para1', -60);
  parallaxIt(e, '.para2', -80);
  parallaxIt(e, '.para3', -72);
//  parallaxIt(e, '.para4', -45);
  parallaxIt(e, '.para5', -60);
  parallaxIt(e, '.para6', -90);
  parallaxIt(e, '.para7', -65);
  parallaxIt(e, '.para8', -70);
}

function parallaxIt(e, target, movement){
  var $this = $('#paraContainer');
  var relX = e.pageX - $this.offset().left;
  var relY = e.pageY - $this.offset().top;
  
  TweenMax.to(target, 1, {
    x: (relX - $this.width()/2) / $this.width() * movement,
    y: (relY - $this.height()/2) / $this.height() * movement,
    ease: Power2.easeOut
  })
}

// parallax cursor

function Parallax(options){
    options = options || {};
    this.nameSpaces = {
        wrapper: options.wrapper || '.parallax',
        layers: options.layers || '.parallax-layer',
        deep: options.deep || 'data-parallax-deep'
    };
    this.init = function() {
        var self = this,
            parallaxWrappers = document.querySelectorAll(this.nameSpaces.wrapper);
      	for(var i = 0; i < parallaxWrappers.length; i++){
			(function(i){
				parallaxWrappers[i].addEventListener('mousemove', function(e){
					var x = e.clientX,
						y = e.clientY,
						layers = parallaxWrappers[i].querySelectorAll(self.nameSpaces.layers);
					for(var j = 0; j < layers.length; j++){
            (function(j){
              var deep = layers[j].getAttribute(self.nameSpaces.deep),
                  disallow = layers[j].getAttribute('data-parallax-disallow'),
                  itemX = (disallow && disallow === 'x') ? 0 : x / deep,
                  itemY = (disallow && disallow === 'y') ? 0 : y / deep;
                  if(disallow && disallow === 'both') return;
                  layers[j].style.transform = 'translateX(' + itemX + '%) translateY(' + itemY + '%)';
            })(j);  
					}
				})
			})(i);
      	}
    };
    this.init();
    return this;
}

window.addEventListener('load', function(){
    new Parallax();
});


// scroll down icon

$(function() {
  $('a[href*=#]').on('click', function(e) {
    e.preventDefault();
    $('html, body').animate({ scrollTop: $($(this).attr('href')).offset().top}, 500, 'linear');
  });
});

// loading

