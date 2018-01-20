<?php

	include('../../app/session.php');

	echo '<head>';
		echo '<title>Printrolls Admin Panel: Producto</title>';
		echo '<link rel="stylesheet" type="text/css" href="../css/style.css">';
		echo '<link rel="stylesheet" type="text/css" href="../../fonts/icons.css">';
		echo '<link rel="stylesheet" type="text/css" href="../../fonts/montserrat.css">';
	echo '</head>';
	echo '<body>';


	if(isset($_POST['select'])){
		$id = $_POST['id'];
		$valor = explode(' ', $id);
		$id = $valor[0];
		$product = $valor[1];

		echo '<div class="back">';
			echo '<form method="POST" action="material.php">';
			echo '<input type="text" name="id" value="'.$product.' '.$product.'" hidden>';
			echo '<i class="icon-arrow"></i>';
			echo '<input type="submit" name="select" value=" ">';
			echo '</form>';
		echo '</div>';
		echo '<h1>PRODUCTO</h1>';

		$consulta = "SELECT * FROM ficha WHERE mercancia_id='$id'";
		if($resultado = $mysqli->query($consulta)){
			echo '<table>';
			echo '<thead>';
				echo '<tr>';
					echo '<td>Medida</td>';
					echo '<td>Peso</td>';
					echo '<td>Dato</td>';
					echo '<td>Acabado</td>';
					echo '<td>Durabilidad</td>';
					echo '<td></td>';
				echo '</tr>';
			echo '<tbody>';
			while($row = $resultado->fetch_assoc()){
				echo '<tr>';
					echo '<td>'.$row['medida'].'</td>';
					echo '<td>'.$row['peso'].'</td>';
					echo '<td>'.$row['dato'].'</td>';
					echo '<td>'.$row['acabado'].'</td>';
					echo '<td>'.$row['durabilidad'].'</td>';
					echo '<td>';
						echo '<a href="action.php?id='.md5($row['id_dato']).'&action='.md5('1').'">Editar</a>';
						echo '<a href="action.php?id='.md5($row['id_dato']).'&action='.md5('2').'">Borrar</a>';
					echo '</td>';
				echo '</tr>';
			}
			echo '</tbody>';
			echo '</table>';
			echo '<div class="options">';
				echo '<a href="new.php?new='.md5($id).'">Nuevo</a>';
				echo '<a href="action.php?avtr='.md5($id).'">Avatar</a>';
				echo '<a href="action.php?crip='.md5($id).'">Descripción</a>';
			echo '</div>';
		}
	}

	echo '</body>';

?>