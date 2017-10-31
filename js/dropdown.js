var menu = document.querySelectorAll('div.col-lg-12 > ul > li > span');
var hover = document.querySelectorAll('div.col-lg-12 > ul > li > a');
var ul = document.querySelectorAll('div.col-lg-12 > ul > li > ul');
 		for(var h = 0; h < menu.length; h++)
 			{
 				if(h>0){
					hover[h].addEventListener("mouseover", function(){
                	this.nextElementSibling.nextElementSibling.style.display = "block";
               });
					ul[h].addEventListener("mouseover", function(){
                	this.style.display = "block";
               });
 				ul[h].addEventListener("mouseout", function(){
                	this.style.display = "none";
               });
               hover[h].addEventListener("mouseout", function(){
                	this.nextElementSibling.nextElementSibling.style.display = "none";
               });
				}
 			}

            for (var i = 0; i < menu.length; i++)
            {

                menu[i].addEventListener("click", function()
                {
                	

                    var menuList = document.querySelectorAll('div.col-lg-12 > ul > li > ul');
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
	    
	    
	    
