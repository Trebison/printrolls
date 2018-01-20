
<link rel="stylesheet" type="text/css" href="../css/modal.css">
<link rel="stylesheet" type="text/css" href="../css/style.css">

<div class="modal">
	<div class="close" id="mdn"><a href="http://mail.printrollspty.com">x</a></div>
	<h3 id="modal_title">Mensaje</h3>
	<form id="forma" method="POST" action="mail2.php">
		<input type="text" name="name" placeholder="Escribe tu Nombre o Empresa">
		<input type="text" name="mail" placeholder="Escribe tu Dirección de Correo">
		<select name="subjet">
		    <option> -- Selecciona un Asunto -- </option>
		    <option>Información</option>
		    <option>Pedido / Compra</option>
		    <option>Otro</option>
		</select>
		<textarea name="body"></textarea>
		<input type="submit" value="Enviar">
	</form>
</div>