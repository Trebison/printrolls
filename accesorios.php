<?php $title = "Accesorios"; ?>
<!DOCTYPE html>
<html>
<head>
	<title><?php echo $title; ?></title>
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
		<div class="block-l2">
			<div class="line"></div>
			<a class="fall" style="background-image: url('img/wallpapers/espatula.png')" href="#data1" name="modal">
				<h3>Espatulas</h3>
			</a>
			<div class="line"></div>
			<a class="fall" style="background-image: url('img/wallpapers/remaches.png')" href="#data2" name="modal">
				<h3>Remaches</h3>
			</a>
			<div class="line"></div>
			<a class="fall" style="background-image: url('img/wallpapers/hojilla.png')" href="#data3" name="modal">
				<h3>Hojillas</h3>
			</a>
			<div class="line"></div>
		</div>
		<div class="pile">
			<a href="m/espatulas.php" class="item"><i class="icon-accesorios"></i>Espatulas</a>
			<a href="m/remaches.php" class="item"><i class="icon-remache"></i>Remaches</a>
			<a href="m/hojillas.php" class="item"><i class="icon-hojilla"></i>Hojillas</a>
		</div>
		<a href="productos.php" id="back-m">Volver</a>
	</main>
	<div id="modal">
		<div id="mask">
			<div id="data1" class="window">
				<?php include('tabs/galeria3.php'); ?>
			</div>
			<div id="data2" class="window">
				<?php include('tabs/galeria2.php'); ?>
			</div>
			<div id="data3" class="window">
				<?php include('tabs/galeria1.php'); ?>
			</div>
		</div>
	</div>
	<script src="js/jquery-3.2.1.js"></script>
	<script src="js/modal/modal.js"></script>
</body>
</html>