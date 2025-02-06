(function($) {
	"use strict";
	
	//P-scrolling
	const ps = new PerfectScrollbar('.app-sidebar', {
	  useBothWheelAxes:true,
	  suppressScrollX:true,
	});
	const ps2 = new PerfectScrollbar('.sidebar-right', {
	  useBothWheelAxes:true,
	  suppressScrollX:true,
	});
	
})(jQuery);