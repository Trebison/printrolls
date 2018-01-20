<?php include("../../app/session.php"); ?>

<!DOCTYPE html>
<html>
<head>
	<title>Printrolls Admin Panel: User New</title>
	<link rel="stylesheet" type="text/css" href="../css/style.css">
	<link rel="stylesheet" type="text/css" href="../../fonts/icons.css">
	<link rel="stylesheet" type="text/css" href="../../fonts/montserrat.css">
</head>
<body>
	<div class="back">
			<a href="index.php"><i class="icon-arrow"></i></a>
	</div>
	<h1>Nuevo Usuario</h1>
	<form method="POST" action="action.php">
		<input type="text" name="user" placeholder="Nombre de Usuario">
		<input type="password" name="pass1" placeholder="Contraseña">
		<input type="password" name="pass2" placeholder="Repite la Contraseña">
		<input type="submit" name="new" value="Crear">
	</form>
</body>
</html>