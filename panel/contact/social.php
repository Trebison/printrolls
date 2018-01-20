<?php

	include('../../app/session.php');
	echo '<head>';
		echo '<title>Printrolls Admin Panel: Usuarios</title>';
		echo '<link rel="stylesheet" type="text/css" href="../css/style.css">';
		echo '<link rel="stylesheet" type="text/css" href="../../fonts/icons.css">';
		echo '<link rel="stylesheet" type="text/css" href="../../fonts/montserrat.css">';
	echo '</head>';
	echo '<body>';
		echo '<div class="back">';
			echo '<a href="index.php"><i class="icon-arrow"></i></a>';
		echo '</div>';
	echo '<h1>SOCIAL NETWORKS</h1>';
	// El id para las Redes Sociales es: 3 
	$consulta = "SELECT * FROM medio WHERE contacto_id LIKE '3'";
	if($resultado = $mysqli->query($consulta)){
		echo '<table>';
			echo '<thead>';
				echo '<tr>';
					echo '<td> Nombre </td>';
					echo '<td> Enlace </td>';
					echo '<td> Horario </td>';
					echo '<td> </td>';
				echo '</tr>';
			echo '</thead>';
			while($row = $resultado->fetch_assoc()){
			echo '<tbody>';
				echo '<tr>';
					echo '<td>'.$row['nombre'].'</td>';
					echo '<td>'.$row['medio'].'</td>';
					echo '<td>'.$row['horario'].'</td>';
					echo '<td>';
						echo '<a href="action.php?id='.md5($row['id_medio']).'&action='.md5('1').'&back=social">Editar</a>';
						echo '<a href="action.php?id='.$row['id_medio'].'3344132&action='.md5('2').'&back=social">Borrar</a>';
					echo '</td>';
				echo '</tr>';
			echo '</tbody>';
		}
		echo '</table>';
	}

	echo '</body>';
?>