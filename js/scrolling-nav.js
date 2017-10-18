$(window).bind('scroll', function () {
    if ($(window).scrollTop() > 50) {
        $('.menu').addClass('navbar-fixed-top color');
    } else {
        $('.menu').removeClass('navbar-fixed-top color');
    }
});

