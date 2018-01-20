<?php include('../../app/session.php'); ?>
<!DOCTYPE html>
<html>
<head>
	<title>Printrolls Admin Panel: Products</title>
	<link rel="stylesheet" type="text/css" href="../css/style.css">
	<link rel="stylesheet" type="text/css" href="../../fonts/icons.css">
	<link rel="stylesheet" type="text/css" href="../../fonts/montserrat.css">
</head>
<body>
	<div class="back">
		<a href="index.php"><i class="icon-arrow"></i></a>
	</div>
	<h1>PRODUCTOS</h1>
	<form method="POST" action="material.php">
		<select name="id">
			<option value="0">-- Seleccione un Tipo de Producto --</option>
			<?php
				$consulta1 = "SELECT * FROM tipo";
				if($resultado1 = $mysqli->query($consulta1)){
					while($row = $resultado1->fetch_assoc()){
						$id_tipo = $row['id_tipo'];
						$tipo = $row['tipo'];
						$consulta2 = "SELECT * FROM producto WHERE tipo_id = '$id_tipo'";
						if($resultado2 = $mysqli->query($consulta2)){
							while($row = $resultado2->fetch_assoc()){
								$valor = $row['id_producto'].' '.$row['producto'];
								echo '<option value="'.$valor.'">'.$tipo.' — '.$row['producto'].'</option>';
							}
						}
					}
				}
			?>
			<input type="submit" name="select" value="Seleccionar">
		</select>
	</form>
</body>
</html>