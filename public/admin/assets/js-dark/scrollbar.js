(function($) {
	"use strict";
	
	//Scrollbar
	$(window).on("load",function(){
		$(".content").mCustomScrollbar();
	});
	
	//Rounded-dots Scrollbar
	$("#content-4").mCustomScrollbar({
		theme:"rounded-dots",
		scrollInertia:400
	});
	
	//X-axis Scrollbar
	$("#content-5").mCustomScrollbar({
		axis:"x",
		theme:"dark-thin",
		autoExpandScrollbar:true,
		advanced:{autoExpandHorizontalScroll:true}
	});
	
})(jQuery);