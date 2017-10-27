




window.onscroll = function() {scrollFunction()};

function scrollFunction() {
    if (document.body.scrollTop > 20 || document.documentElement.scrollTop > 20) {
        document.getElementById("backtop").style.display = "block";
        document.getElementsByClassName("menu")[0].classList.add("navbar-fixed-top","color");
    } else {
        document.getElementById("backtop").style.display = "none";
        document.getElementsByClassName("menu")[0].classList.remove("navbar-fixed-top","color");
    }
}


function back() {

    if(window.scrollY!=0)
{
    setTimeout(function() {
       window.scrollTo(0,window.scrollY-100);
        back();
    }, 100);
   }
}

