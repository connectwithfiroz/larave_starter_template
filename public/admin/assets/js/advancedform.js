(function($) {
	"use strict";
	
		//accordion-wizard
		var options = {
			mode: 'wizard',
			autoButtonsNextClass: 'btn btn-primary float-right',
			autoButtonsPrevClass: 'btn btn-info',
			stepNumberClass: 'badge badge-pill badge-primary mr-1',
			onSubmit: function() {
			  alert('Form submitted!');
			  return true;
			}
		}
		$( "#form" ).accWizard(options);
		
		//datetimepicker1
		$('#datetimepicker1').datetimepicker();
		
		//datetimepicker2
		$('#datetimepicker2').datetimepicker({
			inline: true,
			sideBySide: true
		});
		
		//datetimepicker3
        $('#datetimepicker3').datetimepicker({
            viewMode: 'years'
        });
		
})(jQuery);      