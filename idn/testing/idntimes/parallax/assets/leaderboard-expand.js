
    var domainName = window.location.origin.split('.')[1];
    var orientationSetScrollTop;

    switch (domainName) {
        case 'otosia':
            document.getElementById('seamless-banner').style.width ='calc(100% + 2px)';
            document.getElementById('seamless-banner').style.marginLeft = '-1px';
            break;
        case 'vemale':
            document.getElementById('seamless-banner').style.width = 'calc(100% + 20px)';
            document.getElementById('seamless-banner').style.marginLeft = '-10px';
            break;
        case 'liputan6':
            document.getElementById('seamless-banner').style.width = 'calc(100% + 30px)';
            document.getElementById('seamless-banner').style.marginLeft = '-15px';
            break;
        case 'bola':
            var margin_left =  (typeof(kmklabs) !== "undefined") ? 15 : 13;
            document.getElementById('seamless-banner').style.width = 'calc(100% + '+(margin_left * 2)+'px)';
            document.getElementById('seamless-banner').style.marginLeft = '-'+margin_left+'px';
            break;
        case 'kapanlagi':
            document.getElementById('seamless-banner').style.width = 'calc(100% + 10px)';
            document.getElementById('seamless-banner').style.marginLeft = '-5px';
            break;
    }
    
    var adsOnViewPort = false;
    var scrollStatus = false;
    if (typeof(parent.kmklabs) == 'undefined') {
        document.getElementById('seamless-banner').style.height = '495px';
    } else {
        if ( kmklabs.site == "fimela") {
            document.getElementById('seamless-banner').style.margin = '0 0 30px';
        }else{
            document.getElementById('seamless-banner').style.height ='100%';
        }
    }

    $(window).on('orientationchange', function(event) {
        if (screen.orientation.angle !== 0) {
            scrollStatus = adsOnViewPort;
            setTimeout(function() {
                document.webkitExitFullscreen();
                if (scrollStatus) {
                    window.scrollTo(0, $('#seamless-banner').offset().top);
                }
            }, 3000);
        } else {
            scrollStatus = false;
        }
    });
    
    var impression = 'TRUE'=='TRUE' ? 'https://securepubads.g.doubleclick.net/pcs/view?xai=AKAOjssnCi7f8rgymzk9sQ5zyHl7Xg_wV7yZXjnq9aqe3HfdjWXkl5Pfmo3qi0w2uVbcFx6mURVZ46U9_22fjLlfPtYz7tJ4eSefbeaQrdFPj_PGgt2q0NpdXUwyTXlfvfSAZE9njChKocCP3NOeCokkM07c8DEVIwlcGc7oNGIaBtipUg3HVhxUo1j2gHQzeCmteiJ4R9ct_nBm4JerzU1nJUojswafLwuEFb5hKMacWGohUoYLtipFUaIbBTxaFM5USt85nBwApKI4Y1I_I3Lvupj4yIu0aIw&sai=AMfl-YRBU0ukFON9UoyXTYMH2uC476SNq_VLNuw5xTfDt4u1N-SFObcjDJeshMb6aTlUY3aZm1eIicwZsBMqRZv2hbtB1Rx69ydq_mKojNTTF_nNOoOVnPrhiIClmAV1&sig=Cg0ArKJSzEdNcozaSDSkEAE&urlfix=1&adurl=https://cdns.klimg.com/d.kapanlaginetwork.com/banner/asset/img/pixel.png' : 'https://cdns.klimg.com/d.kapanlaginetwork.com/banner/asset/img/pixel.png';
    var landingPageSeamless = 'TRUE'=='TRUE' ? 'https://adclick.g.doubleclick.net/pcs/click?xai=AKAOjss3MQPtsR1DiTyxV1AC0KanCz6kpf7gioOJXPLf6RYx9FhlK9g-StHCnI8otlLasdYWPrMxxXAvhn0J41L10mmTWOsu2IJVIVBBLWHUHQOOk09707Mg8b19zNg5Oq_FcWaIsPyC7XYi9C9AJn_LSlj0jKV3SK6sm0fYeuK4JJMcK0rkRkmiljb5aySo0W6BQ2f43xWYwevciNRH8hThBv-Blv714d8g0NdWByraZwTnYpLCbZ5TaHsz5fy8HsT6l91Cka1WlP_ttDXAYGhAw57lIXk&sai=AMfl-YSIvlCwscYIb_wMSOWZTbvLsf_fNZl3IPINP-uEvLENB_g-7H8wt2ey05FFDm78yO7G6nXhCvBa1PGqf0P1iqHIksR8iGkV-46A0dQsRoIFVb6kOSTPKIq2vULf&sig=Cg0ArKJSzHmUChGmOzGAEAE&urlfix=1&adurl=https://play.google.com/store/apps/details?id=com.app.one' : 'https://play.google.com/store/apps/details?id=com.app.one';

    var DMPCatSeamless  = 'news'.trim().split(/s*,s*/);
    
    document.getElementById('parralax-wrapper').addEventListener("click",function () {
      generateDMPLPseamless();  
    })

    function generateDMPLPseamless(){
        if(typeof parent.window.createDMPTracker === "function"){
            parent.window.createDMPTracker(DMPCatSeamless,landingPageSeamless);
        }else{
            parent.window.open(landingPageSeamless, '_blank');
        }
    }

    function isElementInViewport(el) {
      var rect = el.getBoundingClientRect();
      return (
        rect.top >= 0 &&
        rect.left >= 0 &&
        rect.bottom <= (window.innerHeight || document. documentElement.clientHeight) &&
        rect.right <= (window.innerWidth || document. documentElement.clientWidth)
      );
    }

    function seamlessSetScrolltopOnRotate() {
      var ex = isElementInViewport(document.getElementById("div-gpt-ad-liputan6-dfp-exposer-oop"));
      console.log(ex);
      if (ex && screen.orientation.angle == 0) {
        document.documentElement.scrollTop = orientationSetScrollTop;
        document.body.scrollTop = orientationSetScrollTop;
        console.log(orientationSetScrollTop);
        console.log(document.documentElement.scrollTop);
      }
    }
    window.addEventListener("orientationchange", seamlessSetScrolltopOnRotate, false);
    document.querySelectorAll('img.seamless-imp')[0].setAttribute('src', impression);