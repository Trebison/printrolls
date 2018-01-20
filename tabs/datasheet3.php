
	<h3 id="modal_title">Ficha Técnica</h3>

	<?php

		$consulta = "SELECT * FROM ficha WHERE mercancia_id = '$id'";
		if($resultado = $mysqli->query($consulta)){
			echo '<table>';
				echo '<thead>';
					echo '<tr>';
						echo '<td> Medida </td>';
						echo '<td> Espesor </td>';
						echo '<td> Acabado </td>';
						echo '<td> largo </td>';
					echo '</tr>';
				echo '</thead>';
				while($row = $resultado->fetch_assoc()){
				echo '<tbody>';
					echo '<tr>';
						echo '<td>'.$row['medida'].'</td>';
						echo '<td>'.$row['peso'].'</td>';
						echo '<td>'.$row['acabado'].'</td>';
						echo '<td>'.$row['dato'].'</td>';
					echo '</tr>';
				echo '</tbody>';
			}
			echo '</table>';
		}
	?>