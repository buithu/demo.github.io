

window.onscroll = function() {scrollFunction1()};

function scrollFunction1() {
    if (document.body.scrollTop > 20 || document.documentElement.scrollTop > 20) {
        document.getElementsByClassName("menu")[0].classList.add("navbar-fixed-top color");
    } else {
        document.getElementsByClassName("menu")[0].classList.remove("navbar-fixed-top color");
    }
}


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

