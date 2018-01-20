<?php $title = "Lonas"; include("app/conex.php"); ?>
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
		<?php 
			include("web/menu_back.php");
		?>
	</header>
	<main>
		<div class="block-l3">
			<div class="lon1" style="background-image: url('img/wallpapers/lon1.jpg')">
				<a class="circle" href="#data1" name="modal">Banner<br>Estándar</a>
			</div>
			<div class="lon2" style="background-image: url('img/wallpapers/lon1.jpg')">
				<a class="circle" href="#data2" name="modal">Banner<br>Promocional</a>
			</div>
		</div>
		<div class="pile">
			<a href="m/lonas.php?id=1" class="item"><i class="icon-lonas"></i>Reverso Negro</a>
			<a href="m/lonas.php?id=2" class="item"><i class="icon-lonas"></i>Reverso Blanco</a>
		</div>
		<a href="productos.php" id="back-m">Volver</a>
	</main>
	<div id="modal">
		<div id="mask">
			<div id="data1" class="window">
				<?php $id = 1; include('tabs/datasheet1.php'); ?>
			</div>
			<div id="data2" class="window">
				<?php $id = 2; include('tabs/datasheet1.php'); ?>
			</div>
		</div>
	</div>
	<script src="js/jquery-3.2.1.js"></script>
	<script src="js/modal/modal.js"></script>
</body>
</html>