//setInterval(showtime(), 1000 );
function showtime() {
    $("#mytime").empty().append( '<p>Date: ' + moment().format("dddd, MMMM Do YYYY") + '</p><p>Time:  ' + moment().format("h:m a") + '</p>');  
}
$(function() {
    //this function makes use of the jquery library
    showtime();
    setInterval(showtime, 1000 );
    $( ".activitybutton" ).click(function() {               
        var activity = $(this).attr('id') + "  sent " + moment().format("dddd, MMMM Do YYYY") + " at " + moment().format("h:m a");// we can collect the id of the element that was clicked
		var formdata = $('#myform').serialize();//and we can collect all the data from a form as a string
		alldata = formdata + "&activity=" + activity;//append other values to the form
		console.log(formdata);
        $('#showsave').empty().append('not yet saved ');
	// set a text element to show that the item is not yet saved - later if the save is a success we can change it back to saved.
		$.ajax({
			type : "POST",
			url : 'demo_AJAX.php',
			data : alldata,
			success : function (data, status) {
					$('#showsave').empty().append('saved ' + status + '<p></p>' + data);
					$('#maincontent').empty().append('<h2>Main content updated</h2>');
					console.log( "done" );
			}
		 });
    }); //onclick
}); //document ready
