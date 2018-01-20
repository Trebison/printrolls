<?php include("app/conex.php"); ?>
<!DOCTYPE html>
<html>
	<head>
		<title>Printrolls</title>
		<meta charset="UTF-8"/>
		<meta name="description" content="">
	  	<meta name="keywords" content="">
	  	<meta name="Author" content="Printrolls"/>
		<meta name='viewport' content="width=device-width, initial-scale=1.0">
		<link rel="stylesheet" href="fonts/icons.css"/>
		<link rel="stylesheet" href="fonts/montserrat.css"/>
		<link rel="stylesheet" type="text/css" href="css/style.css">
		<link rel="stylesheet" type="text/css" href="css/menu.css">
		<link rel="stylesheet" type="text/css" href="css/slider.css">
		<link rel="stylesheet" type="text/css" href="css/grid.css">
		<link rel="stylesheet" type="text/css" href="css/modal.css">
		<link rel="stylesheet" type="text/css" href="css/animation.css">
		<link rel="shortcut icon" href="img/favicon.png" />
	</head>
	<body>
		<header>
			<?php 
				include("web/menu_main.php");
				include("web/grid_main.php"); 
			?>
		</header>
		<main>
			<span class="go_top"><i class="icon-up"></i></span>
			<div class="block-l0" id="slider">
				<div>
					<?php include("web/slider.php"); ?>
				</div>
			</div>
			<div class="block-l1" id="us">
				<div class="content">
					<div class="pall"></div>
					<div class="pack">
						<text>NOSOTROS</text>
						<hr>
						<h3><a id="cursor1" href="javascript:text('contenido1');">EQUIPO</a></h3>
						<h3><a id="cursor2" href="javascript:text('contenido2');">MISIÓN</a></h3>
						<h3><a id="cursor3" href="javascript:text('contenido3');">VISIÓN</a></h3>
						<hr>
						<div class="text">
							<p name="contenido" id="contenido1" class="animation"><?php include("web/team.php") ?></p>
							<p name="contenido" id="contenido2" class="animation"><?php include("web/mision.php") ?></p>
							<p name="contenido" id="contenido3" class="animation"><?php include("web/vision.php") ?></p>
							<p name="contenido" id="contenido0" class="animation" style='display: block;'>Haz click en los títulos para saber más de nosotros</p>
						</div>
					</div>
				</div>
			</div>
			<div class="block-l1" id="contact">
				<div class="content">
					<a class="social" id="s1" href="#wapp" name="modal"><i class="icon-whatsapp"></i></a>
					<a class="social" id="s2" href="https://www.instagram.com/printrolls/" target="_blank"><i class="icon-instagram"></i></a>
					<a class="social" id="s3" href="#form" name="modal"><i class="icon-mail"></i></a>
					<div class="map">
					    <?php include ('web/map.php'); ?>
					</div>
				</div>
			</div>
		</main>
		<footer>
			<?php include("web/footer.php") ?>
		</footer>
		<div id="modal">
			<div id="mask">
				<div id="wapp" class="window">
					<?php include('tabs/wapp.php'); ?>
				</div>
				<div id="form" class="window">
					<?php include('web/form.php'); ?>
				</div>
			</div>
		</div>
		<script src="js/jquery-3.2.1.js"></script>
		<script src="js/slides/slide.js"></script>
		<script src="js/text/change.js"></script>
		<script src="js/text/cursor.js"></script>
		<script src="js/scroll/scroll.js"></script>
		<script src="js/scroll/go_top.js"></script>
		<script src="js/modal/modal.js"></script>
	</body>
</html>