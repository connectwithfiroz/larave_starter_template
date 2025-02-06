$(function(e) {
	//Data table example
	var table = $('#example').DataTable( {
		lengthChange: false,
		buttons: [ 'copy', 'excel', 'pdf', 'colvis' ]
	} );
	table.buttons().container()
	.appendTo( '#example_wrapper .col-md-6:eq(0)' );
	
	//example-2 Data table
	$('#example-2').DataTable();
	
	//example-1 Data table
	$('#example-1').DataTable( {
		"order": [[ 3, "desc" ]]
	});
});