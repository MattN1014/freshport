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

    //Stop URL updating on nav link click
    $('.link-scroll').bind('click', function (e) {

        e.preventDefault();

        var anchor = $(this);
        $('html, body').stop().animate({
            scrollTop: $(anchor.attr('href')).offset().top - 80
        }, 1000);
    });

});

//Stats
$('#stats').ready(function() {
    $('.websites').animationCounter({
        start: 0,
        step: 1,
        end: 30,
        delay: 600
    });
    $('.code').animationCounter({
        start: 0,
        step: 10,
        end: 15000,
        delay: 400
    });
    $('.places').animationCounter({
        start: 0,
        step: 1,
        end: 35,
        delay: 1200
    });
    $('.clients').animationCounter({
        start: 0,
        step: 1,
        end: 30,
        delay: 1500
    });
});