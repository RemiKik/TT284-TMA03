$(function searchforterm() {
    //this function makes use of the jquery library
    $( ".searchforterm" ).click(function() {		
		var formdata = $('#searchform').serialize();//and we can collect all the data from a form as a string
		alldata = formdata;//append other values to the form
		console.log(formdata);
	// set a text element to show that the item is not yet saved - later if the save is a success we can change it back to saved.
			$.ajax({
				type : "POST",
				url : 'TMA03-demo-extract-data.php',
				data : alldata,
				success : function (data, status) {
						$('#search').empty().append('<p></p>' + data);
						console.log( "done" );
			}
		 });
    }); //onclick
}); //document ready

