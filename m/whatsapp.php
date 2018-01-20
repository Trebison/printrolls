<?php include("../app/conex.php"); ?>
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
			<h1><i class="icon-whatsapp"></i></h1>
			<h2>Atención al Cliente</h2>
			<?php
				$consulta = "SELECT * FROM medio WHERE contacto_id LIKE '1'";
				if($resultado = $mysqli->query($consulta)){
					$i = 1;
					while($row = $resultado->fetch_assoc()){
						echo '<div>'.$row['nombre'].'<br>';
						echo '<input type="text" id="in'.$i.'" value="'.$row['medio'].'">';
						echo '<br></div>';
						echo '<button id="copyIn'.$i.'">Copiar Número '.$i.'</button>';
						$i++;
					}
				}
			?>
			<br><br>
		</div>
		<a href="../index.php" id="back-m">Volver</a>
	</body>
	<script src="../js/jquery-3.2.1.js"></script>
	<script src="../js/text/copy.js"></script>
</html>