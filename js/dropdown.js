
 $(".drop .navbar ul li span").click(function() 
								                {
								                    var span = $(this);
								                    var li = $(this).parent();
								                    if (li.hasClass("selected")) {
												    $('ul li').removeClass('selected');
								                 
								                        return false;
								                    } 
								                    else {
								                       
								                        
								                        $('ul li').removeClass('selected');
								                       
								                        li.addClass("selected");
								                    }

								                }); 
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
 
