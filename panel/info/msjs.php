<?php

	include('../../app/session.php');


	echo '<head>';
		echo '<title>Printrolls Admin Panel: Mensajes</title>';
		echo '<link rel="stylesheet" type="text/css" href="../css/style.css">';
		echo '<link rel="stylesheet" type="text/css" href="../../fonts/icons.css">';
		echo '<link rel="stylesheet" type="text/css" href="../../fonts/montserrat.css">';
	echo '</head>';
	echo '<body>';
		echo '<div class="back">';
			echo '<a href="index.php"><i class="icon-arrow"></i></a>';
		echo '</div>';
	echo '<h1>MENSAJES</h1>';

	$consulta = "SELECT * FROM printrolls";
	if($resultado = $mysqli->query($consulta)){
		while($row = $resultado->fetch_assoc()){
			
			echo '<form method="POST" action="action.php">';
			echo '<input type="text" name="mensaje1" value="'.$row['mensaje1'].'"" required>';
			echo '<input type="text" name="mensaje2" value="'.$row['mensaje2'].'"" required>';
			echo '<input type="text" name="mensaje3" value="'.$row['mensaje3'].'"" required>';
			echo '<input type="submit" name="msj" value="Enviar">';
			echo '</form>';
		
		}
	}

	echo '</body>';
?>