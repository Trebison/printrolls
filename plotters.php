<?php $title = "Plotters"; include("app/conex.php"); ?>
<!DOCTYPE html>
<html>
	<head>
		<title><?php echo $title; $id = 6; ?></title>
		<meta charset="UTF-8"/>
		<meta name="viewport" content="width-decive-width, user-scalable=no, initial-scale=1, maximun-scale=1, minimun-scale=1"/>
		<link rel="stylesheet" href="fonts/icons.css"/>
		<link rel="stylesheet" href="fonts/montserrat.css"/>
		<link rel="stylesheet" type="text/css" href="css/style.css">
		<link rel="stylesheet" type="text/css" href="css/menu.css">
		<link rel="stylesheet" type="text/css" href="css/modal.css">
		<link rel="shortcut icon" href="img/favicon.png" />
	</head>
	<body>
		<header>
			<?php include("web/menu_back.php"); ?>
		</header>
		<main>
			<span class="go_top"><i class="icon-up"></i></span>
			<div class="block-l0">
				<img src="img/items/plotter.jpg">
			</div>
			<div class="block-l4">
				<div class="block-left" id="plot">
					<h1><large>Plotter de Corte</large></h1>
					<h1><small>Foison C</small></h1><br>
					<p>La Serie C es perfecta para quién busca un Plotter de Recorte eficiente y de gran costo-beneficio</p>
				</div>
				<div class="block-right">
					<div id="pl">
						<img src="img/items/foison.jpg">
					</div>
				</div>
			</div>
			<div class="block-l4" id="tolp">
				<div class="wllplot" id="us">

				</div>
			</div>
			<div class="block-l0">
				<div class="sep">
					<h2>INFORMACIÓN TÉCNICA</h2>
				</div>
				<div class="muestras">
						<?php
							$mercancia = "SELECT * FROM mercancia WHERE producto_id = '$id' LIMIT 2";
							if($result = $mysqli->query($mercancia)){
								while($row = $result->fetch_assoc()){
									echo '<div class="muestra">';
									echo '<img src="img/wallpapers/'.$row['mercancia'].'.jpg">';
									echo '<span><h3><small>'.$row['mercancia'].'</small></h3></span>';
									echo '<p>';
										echo $row['descripcion'];
									echo '</p>';
									echo '</div>';
								}
							}
						?>
					</div>
				</div>
			</div>
		</main>
		<footer>
			
		</footer>
		<script src="js/jquery-3.2.1.js"></script>
		<script src="js/scroll/go_top.js"></script>
	</body>
</html>