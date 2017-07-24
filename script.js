$( document ).ready(function() {
    console.log( "ready!" );
	$( ".cl1" ).click(function(event) {
  alert( "Handler for .click() called." );

$.ajax({
  url: 'aj.php',
  success: function(data) {
    $('.cl2').html(data);
  }
});

event.preventDefault();

});
	

	
	
	
});