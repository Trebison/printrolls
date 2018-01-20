<?php include("../../app/session.php"); ?>

<!DOCTYPE html>
<html>
<head>
	<title>Printrolls Admin Panel: Config</title>
	<link rel="stylesheet" type="text/css" href="../css/style.css">
	<link rel="stylesheet" type="text/css" href="../../fonts/icons.css">
	<link rel="stylesheet" type="text/css" href="../../fonts/montserrat.css">
</head>
<body>
	<div class="back">
			<a href="index.php"><i class="icon-arrow"></i></a>
	</div>
	<h1>CAMBIO DE CONTRASEÑA</h1>
	<form method="POST" action="config.php">
		<input type="password" name="pass1" placeholder="Contraseña Actual">
		<input type="password" name="pass2" placeholder="Contraseña Nueva">
		<input type="password" name="pass3" placeholder="Repita la Contraseña Nueva">
		<input type="submit" name="enviar" value="Enviar">
	</form>
</body>
</html>

<?php

	if(isset($_POST['enviar'])){
		$pass1 = $_POST['pass1'];
		$pass2 = $_POST['pass2'];
		$pass3 = $_POST['pass3'];
		if($pass2 == $pass3){
			$consulta = "SELECT * FROM admin WHERE user='$user'";
			if($resultado = $mysqli->query($consulta)){
				$row = $resultado->fetch_assoc();
				$pass0 = $row['password'];
				$same = password_verify($pass1, $pass0);

				if($same){
					$pswhash = password_hash($pass2, PASSWORD_BCRYPT);
					$sql = "UPDATE admin SET password='$pswhash'";
					if($resultado = $mysqli->query($sql)){
						echo "La Contraseña ha sido Cambiada con Exito";
					}
					else{
						echo "Error al Intentar Cambiar la Contraseña";
					}
				}
				else{
					echo "La Contraseña es Incorrecta";
				}
			}
		}
		else{
			echo "Las Contraseñas No Coinciden";
		}
	}else{
		echo "";
	}

?>