<?php include("app/conex.php"); ?>
<!DOCTYPE html>
<html>
<head>
	<title>Productos</title>
	<meta charset="UTF-8"/>
	<meta name="viewport" content="width-decive-width, user-scalable=no, initial-scale=1, maximun-scale=1, minimun-scale=1"/>
	<link rel="stylesheet" href="fonts/icons.css"/>
	<link rel="stylesheet" href="fonts/montserrat.css"/>
	<link rel="stylesheet" type="text/css" href="css/style.css">
	<link rel="stylesheet" type="text/css" href="css/menu.css">
	<link rel="stylesheet" type="text/css" href="css/grid.css">
	<link rel="stylesheet" type="text/css" href="css/animation.css">
	<link rel="shortcut icon" href="img/favicon.png" />
</head>
<body>
	<header>
		<?php 
			include("web/menu_plus.php");
			include("web/grid_second.php");
		?>
	</header>
	<main>
		<div class="block-l2">
			<div class="wall">
				<div class="pop">
					<?php
						$consulta = "SELECT * FROM printrolls";
						if($resultado = $mysqli->query($consulta)){
							while($row = $resultado->fetch_assoc()){
								echo '<p>'.$row['mensaje1'].'</p>';
								echo '<div class="separator"></div>';
								echo '<p>'.$row['mensaje2'].'</p>';
								echo '<div class="separator"></div>';
								echo '<p>'.$row['mensaje3'].'</p>';
							}
						}
					?>
				</div>
				<div class="headline"><h1>PRODUCTOS</h1></div>	
			</div>
		</div>
	</main>
	<script src="js/jquery-3.2.1.js"></script>
	<script src="js/menu/open.js"></script>
</body>
</html>