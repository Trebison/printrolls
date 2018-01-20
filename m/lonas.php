<?php
	include("../app/conex.php"); 
	$id = $_GET['id'];
?>
<!DOCTYPE html>
<html>
	<head>
		<title>Printrolls</title>
		<meta charset="UTF-8"/>
		<meta name="description" content="">
	  	<meta name="keywords" content="">
	  	<meta name="Author" content="Printrolls"/>
		<meta name='viewport' content="width=device-width, initial-scale=1.0">
		<link rel="stylesheet" href="../fonts/icons.css"/>
		<link rel="stylesheet" href="../fonts/montserrat.css"/>
		<link rel="stylesheet" type="text/css" href="../css/style.css">
		<link rel="stylesheet" type="text/css" href="../css/menu.css">
		<link rel="shortcut icon" href="../img/favicon.png" />
	</head>
	<body>
		<header>
			<?php 
				include("../web/menu_main.php");
			?>
		</header>
		<div class="block-l5">
			<?php
				$mercancia = "SELECT * FROM mercancia WHERE id_mercancia = '$id'";
				if($result = $mysqli->query($mercancia)){
					while($row = $result->fetch_assoc()){
						echo '<div class="modal-avatar">';
							echo '<div class="avatar" style="background-image: url(img/thumbs/'.$row['avatar'].');"></div>';
							echo '<h2>'.$row['mercancia'].'</h2>';
						echo '</div>';
						echo '<p>';
							echo $row['descripcion'];
						echo '</p>';
					}
				}
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
		<a href="../lonas.php" id="back-m">Volver</a>
	</body>
</html>