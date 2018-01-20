<?php include("../app/conex.php"); ?>
<!DOCTYPE html>
<html>
	<head>
		<title>Printrolls</title>
		<meta charset="UTF-8"/>
		<meta name="description" content="">
	  	<meta name="keywords" content="">
	  	<meta name="Author" content="Printrolls"/>
		<meta name='viewport' content="width=device-width, initial-scale=1.0">
		<link rel="stylesheet" href="../fonts/icons.css"/>
		<link rel="stylesheet" href="../fonts/montserrat.css"/>
		<link rel="stylesheet" type="text/css" href="../css/style.css">
		<link rel="stylesheet" type="text/css" href="../css/menu.css">
		<link rel="shortcut icon" href="../img/favicon.png" />
	</head>
	<body>
		<header>
			<?php 
				include("../web/menu_main.php");
			?>
		</header>
		<div class="block-l5">
			<h1><i class="icon-mail"></i></h1>
			<h2>Contacto</h2>
			<form method="POST" action="../mail2.php">
				<input type="text" name="name" placeholder="Nombre o Empresa" required>
				<input type="text" name="name" placeholder="Ingresa tu correo" required>
				<select name="subjet" required>
				    <option> -- Selecciona un Asunto -- </option>
				    <option>Información</option>
				    <option>Pedidos / Compras</option>
				    <option>Otros</option>
				</select>
				<textarea name="body" required></textarea>
				<input type="submit" name="send" value="Enviar">
			</form>
		</div>
		<a href="../index.php" id="back-m">Volver</a>
	</body>
	<script src="../js/jquery-3.2.1.js"></script>
	<script src="../js/text/copy.js"></script>
</html>