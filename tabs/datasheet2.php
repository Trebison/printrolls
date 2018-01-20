
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

			$muestra = "SELECT * FROM muestra WHERE mercancia_id = '$id' AND status ='1'";
			if($resulti = $mysqli->query($muestra)){
				while($row = $resulti->fetch_assoc()){
					echo '<div class="par"></div>';
						echo '<div class="muestra">';
							echo '<img src="img/items/'.$row['imagen'].'">';
						echo '</div>';
					echo '</div>';
				}
			}
		?>

		<div class="modal-right">
			<h3>Ficha Técnica</h3>

			<?php

				$consulta = "SELECT * FROM ficha WHERE mercancia_id = '$id'";
				if($resultado = $mysqli->query($consulta)){
					while($row = $resultado->fetch_assoc()){
						echo '<div class="datasheet">';
							echo '<div class="par2"></div>';
							echo '<h1>Medidas</h1>';
							echo '<center><h0>'.$row['dato'].'</h0></center>';
							echo '<div class="par3"></div>';
						echo '</div>';
					}
				}
			?>
		</div>
	</div>
</div>