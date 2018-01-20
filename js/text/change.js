
function text(text_id) {
	var contenido = document.getElementsByTagName("p");
		for(var x=0; x<contenido.length; x++) {
			name = contenido[x].getAttribute("name");
			if (name == 'contenido') {
				if (contenido[x].id == text_id) {
					contenido[x].style.display = 'block';
					contenido[x].style.transition  = '4s';
			}else {
				contenido[x].style.display = 'none';
			}

		}
	}
}