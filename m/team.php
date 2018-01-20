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
			<h1><i class="icon-team"></i></h1>
			<?php
				$team = "SELECT * FROM printrolls";
				if($teami = $mysqli->query($team)){
					while($row = $teami->fetch_assoc()){
						echo '<h2>Equipo</h2>';
						echo '<p>'.$row['equipo'].'</p><br>';
						echo '<h2>Misión</h2>';
						echo '<p>'.$row['mision'].'</p><br>';
						echo '<h2>Visión</h2>';
						echo '<p>'.$row['vision'].'</p><br>';
					}
				}
			?>
		</div>
		<a href="../index.php" id="back-m">Volver</a>
	</body>
</html>