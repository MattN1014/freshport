$(function (){
    //Navbar
    $(window).scroll(function () {
        if ($(window).scrollTop() > 0) {
            $('nav.navbar').addClass('navbar-scrolled');
        } else {
            $('nav.navbar').removeClass('navbar-scrolled');
        }
    });

    //Scroll Spy
    $('body').scrollspy({
        target: '.navbar',
        offset: 120
    });
});






