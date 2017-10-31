
var menu = document.querySelectorAll('div.col-lg-12 > ul > li > span');
 

            for (var i = 0; i < menu.length; i++)
            {

                menu[i].addEventListener("click", function()
                {
                	

                    var menuList = document.querySelectorAll('div.col-lg-12 > ul > li > ul');
                    for (var j = 0; j < menuList.length; j++) {
                        
                        if ( menuList[j].style.display == "block") {
                        	menuList[j].style.display = "none";
                        }
                        else{
                        	
                        	this.nextElementSibling.style.display = "block";
                        }
                    }
 					
                   
                    
                });
            }
            window.onclick = function(event) {
		    if (!event.target.matches('.spanmn')) {
			    	for (var d = 0; d < menu.length; d++){
			      document.getElementsByClassName("ka1")[d].style.display = "none";
			    	}
		    	}
		    }
	    
$(".menuleft .navbar ul li span").click(function(){

 	var span = $(this);
	var li = $(this).parent();
	if (li.hasClass("selected")) {
		span.addClass("glyphicon-minus");
								                 
	return false;
	} 
	 else {
    span.removeClass("glyphicon-minus");
	 }
 });
 
