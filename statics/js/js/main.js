$(function(){
	
	 $('.navbar-toggle').toggle(function(){
	 	
	 	  $('.container > .navbar').show();
	 	  
	 	  $('.open').hide();
	 	  
		  $('.close').show();
		  
	 },function(){
	 	
	 	 $('.container > .navbar').hide();
	 	 
	 	 $('.open').show();
	 	 
 		 $('.close').hide();
	 })

     $('.navbar .navbar-list li').click(function(){
     	
     	 $(this).addClass('active').siblings().removeClass('active');
     	 
     	 var index = $(this).index();
     	 
     	 $('.navbar .navbar-con').eq(index).show().siblings().hide();
     	 
     })
     
     $(".nav_list").css("left",sessionStorage.left+"px");
    var nav_w=$(".nav_list li").first().width();
    $(".sideline").width(nav_w);
    var fl_w=$(".nav_list").width();
    var flb_w=$(".nav_line").width();
    $(".nav_list").on('touchstart', function (e) {
        var touch1 = e.originalEvent.targetTouches[0];
        x1 = touch1.pageX;
        y1 = touch1.pageY;
        ty_left = parseInt($(this).css("left"));
    });
    $(".nav_list").on('touchmove', function (e) {
        var touch2 = e.originalEvent.targetTouches[0];
        var x2 = touch2.pageX;
        var y2 = touch2.pageY;
        if(ty_left + x2 - x1>=0){
            $(this).css("left", 0);
        }else if(ty_left + x2 - x1<=flb_w-fl_w){
            $(this).css("left", flb_w-fl_w);
        }else{
            $(this).css("left", ty_left + x2 - x1);
        }
        if(Math.abs(y2-y1)>0){
            e.preventDefault();
        }
    });
   

     
     
     
});