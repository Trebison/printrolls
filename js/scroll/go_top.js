
$(document).ready(function(){
	
	$('.go_top').click(function(){
		$('body,html').animate({
			scrollTop: '0px'
		}, 1000);
	});
	
	$(window).scroll(function(){
		if( $(this).scrollTop() > 0 ){
			$('.go_top').slideDown(300);
		} else {
			$('.go_top').slideUp(300);
		}
	});
	
});