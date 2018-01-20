
<div class="modal">
	<div class="close" id="mdn"><a href="">X</a></div>
	<h3 id="modal_title">Atención al Cliente</h3>

	<?php

	$consulta = "SELECT * FROM medio WHERE contacto_id LIKE '1'";
	if($resultado = $mysqli->query($consulta)){
		echo '<table>';
			echo '<thead>';
				echo '<tr>';
					echo '<td> Vendedor </td>';
					echo '<td> Número </td>';
					echo '<td> Horario </td>';
				echo '</tr>';
			echo '</thead>';
			while($row = $resultado->fetch_assoc()){
			echo '<tbody>';
				echo '<tr>';
					echo '<td>'.$row['nombre'].'</td>';
					echo '<td>'.$row['medio'].'</td>';
					echo '<td>'.$row['horario'].'</td>';
				echo '</tr>';
			echo '</tbody>';
		}
		echo '</table>';
	}
	
	?>
</div>