var nav = document.getElementById('nav');
nav.addEventListener('click', function(){
	nav.classList.toggle('open');
});

$('#nav').on('click', function(){
	$('#slide').toggleClass('show');
});