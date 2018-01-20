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
	echo '<h1>USUARIOS</h1>';

	$consulta = "SELECT * FROM admin";
	if($resultado = $mysqli->query($consulta)){
		echo '<table>';
		echo '<thead>';
			echo '<tr>';
				echo '<td>Usuario</td>';
				echo '<td>Ultimo Inicio de Sesión</td>';
				if($user == 1){
					echo '<td> </td>';
				}else{

				}
			echo '</tr>';
		echo '</thead>';
		echo '</tbody>';
		while($row = $resultado->fetch_assoc()){
			echo '<tr>';
			echo '<td>'.$row['user'].'</td>';
			if($row['lastsession'] == '0000-00-00 00:00:00'){
				echo "<td>Nunca</td>";
			}
			else{
				$lastsession = explode(' ', $row['lastsession']);
				$date = explode('-', $lastsession[0]);
				$hour = explode(':', $lastsession[1]);
				$date = $date[2].' / '.$date[1].' / '.$date[0];
				$hour = $hour[0].':'.$hour[1];
				$lastsession = $date.' — '.$hour;
				echo '<td>'.$lastsession.'</td>';
			}
			if($user == 1){
				if($row['id_user'] == 1){
					echo '<td></td>';
				}else{

					echo '<td><a href="action.php?id='.md5($row['id_user']).'&action='.md5('1').'">Editar</a>';
					echo '<a href="action.php?id='.md5($row['id_user']).'&action='.md5('2').'">Borrar</a></td>';
				}
			}
			else{

			}
			echo '</tr>';
		}
		echo '</tbody>';
		echo '</table>';
	}

	echo '</body>';

?>