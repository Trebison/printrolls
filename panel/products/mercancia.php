<?php include('../../app/session.php'); ?>
<!DOCTYPE html>
<html>
<head><meta http-equiv="Content-Type" content="text/html; charset=gb18030">
	<title>Printrolls Admin Panel: Products</title>
	<link rel="stylesheet" type="text/css" href="../css/style.css">
	<link rel="stylesheet" type="text/css" href="../../fonts/icons.css">
	<link rel="stylesheet" type="text/css" href="../../fonts/montserrat.css">
</head>
<body>
	<div class="back">
		<a href="index.php"><i class="icon-arrow"></i></a>
	</div>
	<h1>NUEVO MATERIAL</h1>

	<form method="POST" action="mercancia.php" enctype='multipart/form-data'>
		<input type="text" name="mercancia" placeholder="Nombre" required>
		<textarea name="descripcion" placeholder="Descripción..." rows="8" required></textarea>
		<select name="producto_id">
			<option value='0'>-- Seleccione un Tipo de Producto --</option>
			<?php
				$consulta = "SELECT * FROM producto";
				if($result = $mysqli->query($consulta)){
					while($row = $result->fetch_array()){
						echo '<option value='.$row['id_producto'].'>'.$row['producto'].'</option>';
					}
				}
			?>
		</select>
		<input type="submit" name="new" value="Crear">
	</form>
</body>
</html>

<?php
	
	if(isset($_POST['new'])){

		$mercancia = $_POST['mercancia'];
		$descripcion = $_POST['descripcion'];
		$id_producto = $_POST['producto_id'];

		$action = "INSERT INTO mercancia (mercancia,descripcion,producto_id) VALUES ('$mercancia','$descripcion','$id_producto')";
		if($mysqli->query($action)){
			echo '<div class="alert">creado</div>';
			echo "<script>setTimeout(location.href = 'index.php',3);</script>";
		}
		else{
			echo '<div class="error">no creado</div>';
		}
	}

?>