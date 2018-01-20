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
	<h1>NUEVA MUESTRA</h1>

	<form method="POST" action="muestra.php" enctype='multipart/form-data'>
		<select name="mercancia_id">
			<option value='0'>-- Seleccione la Mercancia --</option>
			<?php
				$consulta = "SELECT * FROM mercancia WHERE producto_id='4'";
				if($result = $mysqli->query($consulta)){
					while($row = $result->fetch_array()){
						echo '<option value='.$row['id_mercancia'].'>'.$row['mercancia'].'</option>';
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

		$id = $_POST['mercancia_id'];
		echo "<script>setTimeout(location.href = 'action.php?picture=".md5('2')."&id=".$id."',3);</script>";
	}

?>