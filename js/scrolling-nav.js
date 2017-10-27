




window.onscroll = function() {scrollFunction()};

function scrollFunction() {
    if (document.body.scrollTop > 20 || document.documentElement.scrollTop > 20) {
        document.getElementById("backtop").style.display = "block";
        document.getElementsByClassName("menu")[0].classList.add("navbar-fixed-top color");
    } else {
        document.getElementById("backtop").style.display = "none";
        document.getElementsByClassName("menu")[0].classList.add("navbar-fixed-top color");
    }
}


function back() {

    document.body.scrollTop = 0;
    document.documentElement.scrollTop = 0;
}

