<div class="modal">
	<div class="close"><a href="">X</a></div>
	<div class="modal-cont">
		<div class="modal-left">
		<?php

			$mercancia = "SELECT * FROM mercancia WHERE id_mercancia = '$id'";
			if($result = $mysqli->query($mercancia)){
				while($row = $result->fetch_assoc()){
					echo '<div class="modal-avatar">';
						echo '<div class="avatar" style="background-image: url(img/thumbs/'.$row['avatar'].');"></div>';
						echo '<h3>'.$row['mercancia'].'</h3>';
					echo '</div>';
					echo '<p>';
						echo $row['descripcion'];
					echo '</p>';
				}
			}
		?>
		</div>
		<div class="modal-right">
			<h3>Ficha Técnica</h3>

			<?php

			$consulta = "SELECT * FROM ficha WHERE mercancia_id = '$id'";
			if($resultado = $mysqli->query($consulta)){
				echo '<table>';
					echo '<thead>';
						echo '<tr>';
							echo '<td> Medida </td>';
							echo '<td> Peso </td>';
							echo '<td> Fondo </td>';
							echo '<td> Acabado </td>';
							echo '<td> Durabilidad </td>';
						echo '</tr>';
					echo '</thead>';
					while($row = $resultado->fetch_assoc()){
					echo '<tbody>';
						echo '<tr>';
							echo '<td>'.$row['medida'].'</td>';
							echo '<td>'.$row['peso'].'</td>';
							echo '<td>'.$row['dato'].'</td>';
							echo '<td>'.$row['acabado'].'</td>';
							echo '<td>'.$row['durabilidad'].'</td>';
						echo '</tr>';
					echo '</tbody>';
				}
				echo '</table>';
			}
			
			?>
			
		</div>
	</div>
</div>