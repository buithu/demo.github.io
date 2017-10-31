var menu = document.querySelectorAll('div.col-lg-12 > ul > li > span');
 

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
