
 



 var menu = document.querySelectorAll('div.col-lg-7 > ul > li > span');
 var hover = document.querySelectorAll('div.col-lg-7 > ul > li > a');

 for(var h = 1; h < menu.length; h++)
 			{
 				hover[h].addEventListener("mouseover", function(){
                	this.nextElementSibling.nextElementSibling.style.display = "block";
               });
               hover[h].addEventListener("mouseout", function(){
                	this.nextElementSibling.nextElementSibling.style.display = "none";
               });
 			}
            for (var i = 0; i < menu.length; i++)
            {

                menu[i].addEventListener("click", function()
                {
                    var menuList = document.querySelectorAll('div.col-lg-7 > ul > li > ul');
                    for (var j = 0; j < menuList.length; j++) {

                        	menuList[j].style.display = "none";
                    }
                    

 						this.nextElementSibling.style.display = "block";
 
 					
                });

               
            }
            
            window.onclick = function(event) {
		    if (!event.target.matches('.spanmn')) {
			    	for (var d = 0; d < menu.length; d++){
			      document.getElementsByClassName("ka1")[d].style.display = "none";
			    	}
		    	}
		    }
