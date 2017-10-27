$(window).bind('scroll', function () {
    if ($(window).scrollTop() > 50) {
        $('.menu').addClass('navbar-fixed-top color');
    } else {
        $('.menu').removeClass('navbar-fixed-top color');
    }
});

window.onscroll = function() {scrollFunction()};

function scrollFunction() {
    if (document.body.scrollTop > 20 || document.documentElement.scrollTop > 20) {
        document.getElementById("backtop").style.display = "block";
    } else {
        document.getElementById("backtop").style.display = "none";
    }
}


function back() {

    document.body.scrollTop = 0;
    document.documentElement.scrollTop = 0;
}

