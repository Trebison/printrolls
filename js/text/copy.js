
	var area1 = document.getElementById("in1");
	var copy1 = document.getElementById("copyIn1");
	var area2 = document.getElementById("in2");
	var copy2 = document.getElementById("copyIn2");
	var answer = document.getElementById("copyAnswer");

	copy1.addEventListener('click', function(e) {
	area1.select();
	try {
		 var successful = document.execCommand('copy');
		     
		 if(successful) answer.innerHTML = '¡Nombre Copiado!';
		     else answer.innerHTML = 'Incapaz de copiar';
		 } catch (err) {
		      answer.innerHTML = 'El navegador no soporta esta acción';
		 }
	});

	copy2.addEventListener('click', function(e) {
	area2.select();
	try {
		 var successful = document.execCommand('copy');
		     
		 if(successful) answer.innerHTML = '¡Nombre Copiado!';
		     else answer.innerHTML = 'Incapaz de copiar';
		 } catch (err) {
		      answer.innerHTML = 'El navegador no soporta esta acción';
		 }
	});