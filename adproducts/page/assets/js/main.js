// js accordion

$('.toggle').click(function(e) {
    e.preventDefault();

    var $this = $(this);

    if ($this.next().hasClass('show')) {
        $this.next().removeClass('show');
        $this.next().slideUp(350);
        $this.children('.fa').removeClass('fa-angle-down');
    } else {
        $this.parent().parent().find('li .inner').removeClass('show');
        $this.parent().parent().find('li .inner').slideUp(350);
        $this.parent().parent().find('.fa-angle-down').removeClass('fa-angle-down');
        $this.parent().parent().find('.fa').addClass('fa-angle-right');
        $this.next().toggleClass('show');
        $this.next().slideToggle(350);
        $this.children('.fa').addClass('fa-angle-down');  
    }
});

// js sidebar menu 

function showhideMenu() {
    var menubtn1 = document.getElementById("menubtn");
    var menu = document.getElementById("sidebar-wrapper");
    var menuover = document.getElementById("sidebar-overlay");
    var navcus = document.getElementById("navbar-cus");
    var main2 = document.getElementById("iframe_idn");

    if (menu.style.width === "250px") {
        menu.style.width = "0px";
        menu.style.opacity = "0";
        menuover.style.width = "0px";
        main2.style.marginLeft = "0px";
        // menubtn1.innerHTML = "Show Menu"; 
        // menubtn1.style.left = "0";


    } else {
        menu.style.width = "250px";
        menu.style.opacity = "1";
        menuover.style.width = "100vw";
        main2.style.marginLeft = "100px";
        // menubtn1.innerHTML = "Hide Menu"; 
        // menubtn1.style.left = "250px";

    }
}

function showhideMenu2() {
    var menubtn1 = document.getElementById("menubtn");
    var menu = document.getElementById("sidebar-wrapper");
    var menuover = document.getElementById("sidebar-overlay");
    var navcus = document.getElementById("navbar-cus");
    var main1 = document.getElementById("home_awal");

    if (menu.style.width === "250px") {
        menu.style.width = "0px";
        menu.style.opacity = "0";
        navcus.style.opacity = "0"; 
        menuover.style.width = "0px";
        main1.style.marginLeft = "0px";
    } else {
        menu.style.width = "250px";
        menu.style.opacity = "1";
        navcus.style.opacity = "1";
        menuover.style.width = "100vw";
        main1.style.marginLeft = "250px";
    }
}

// js is active
       
function myFunction(e) {
    var elems = document.querySelectorAll(".aktif");
    [].forEach.call(elems, function(el) {
        el.classList.remove("aktif");
    });
    e.target.className = "aktif";
}
        
// js remove home change to iframe        

function remove_home() {
    document.getElementById("home_awal").style.display = "none";
    document.getElementById("menubtn").style.opacity = "1";
    document.getElementById("iframe_idn").style.display = "block";
}
        