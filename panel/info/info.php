<?php

	include('../../app/session.php');

	echo '<head>';
		echo '<title>Printrolls Admin Panel: Nosotros</title>';
		echo '<link rel="stylesheet" type="text/css" href="../css/style.css">';
		echo '<link rel="stylesheet" type="text/css" href="../../fonts/icons.css">';
		echo '<link rel="stylesheet" type="text/css" href="../../fonts/montserrat.css">';
	echo '</head>';
	echo '<body>';
		echo '<div class="back">';
			echo '<a href="index.php"><i class="icon-arrow"></i></a>';
		echo '</div>';
	echo '<h1>NOSOTROS</h1>';

	$consulta = "SELECT * FROM printrolls";
	if($resultado = $mysqli->query($consulta)){
		while($row = $resultado->fetch_assoc()){
			
			echo '<form method="POST" action="action.php">';
			echo '<label>Equipo</label><textarea name="equipo" required>'.$row['equipo'].'</textarea>';
			echo '<label>Mision</label><textarea name="mision" required>'.$row['mision'].'</textarea>';
			echo '<label>Vision</label><textarea name="vision" required>'.$row['vision'].'</textarea>';
			echo '<input type="submit" name="info" value="Enviar">';
			echo '</form>';
		
		}
	}
?>