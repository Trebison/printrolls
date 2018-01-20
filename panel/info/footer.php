<?php

	include('../../app/session.php');

	echo '<head>';
		echo '<title>Printrolls Admin Panel: Footer</title>';
		echo '<link rel="stylesheet" type="text/css" href="../css/style.css">';
		echo '<link rel="stylesheet" type="text/css" href="../../fonts/icons.css">';
		echo '<link rel="stylesheet" type="text/css" href="../../fonts/montserrat.css">';
	echo '</head>';
	echo '<body>';
		echo '<div class="back">';
			echo '<a href="index.php"><i class="icon-arrow"></i></a>';
		echo '</div>';
	echo '<h1>FOOTER</h1>';

	$consulta = "SELECT * FROM printrolls";
	if($resultado = $mysqli->query($consulta)){
		while($row = $resultado->fetch_assoc()){
			
			echo '<form method="POST" action="action.php">';
			echo '<input type="text" name="pie" value="'.$row['pie'].'" required>';
			echo '<input type="submit" name="footer" value="Enviar">';
			echo '</form>';
		
		}
	}

	echo '</body>';
?>