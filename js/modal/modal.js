$(document).ready(function() {	

	$('a[name=modal]').click(function(e) {

		e.preventDefault();

		var id = $(this).attr('href');
		$(id).css({'display':'flex'});
	
		var maskHeight = $(document).height();
		var maskWidth = $(window).width();
	
		$('#mask').css({'width':maskWidth,'height':maskHeight});
		
		//transition effect		
		$('#mask').fadeIn(1000);	
		$(id).fadeIn(2000); 
	
	});

	$('.window .close').click(function (e) {
		e.preventDefault();
		$('#mask, .window').hide();
	});  
		
});