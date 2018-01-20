<?php $title = "Vinilos"; include("app/conex.php"); ?>
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
		<div class="block-l3">
			<div class="roll1" style="background-image: url('img/wallpapers/roll1.png')">
				<a class="circle" href="#data1" id="vinyl" name="modal">Vinyl</a>
			</div>
			<div class="roll2" style="background-image: url('img/wallpapers/roll2.png')">
				<a class="circle" href="#data2" name="modal">Micro</a>
			</div>
			<div class="roll3" style="background-image: url('img/wallpapers/roll3.jpg')">
				<a class="circle" href="#data3" name="modal">Reflectivo</a>
			</div>
			<div class="roll4" style="background-image: url('img/wallpapers/roll4.png')">
				<a class="circle" href="#data4" name="modal">Esmerilado</a>
			</div>
		</div>
		<div class="pile">
			<a href="m/vinilos.php?id=3&op=0125896321a12589" class="item"><i class="icon-vinilos"></i>Vinyl</a>
			<a href="m/vinilos.php?id=4&op=k105897574125aSd" class="item"><i class="icon-vinilos2"></i>Micro</a>
			<a href="m/vinilos.php?id=5&op=1120000235753159" class="item"><i class="icon-vinilos"></i>Reflectivo</a>
			<a href="m/vinilos.php?id=6&op=5879422566223223" class="item"><i class="icon-vinilos2"></i>Esmerilado</a>
		</div>
		<a href="productos.php" id="back-m">Volver</a>
	</main>
	<div id="modal">
		<div id="mask">
			<div id="data1" class="window">
				<?php $id = 3; include('tabs/datasheet1.php'); ?>
			</div>
			<div id="data2" class="window">
				<?php $id = 4; include('tabs/datasheet1.php'); ?>
			</div>
			<div id="data3" class="window">
				<?php $id = 5; include('tabs/datasheet1.php'); ?>
			</div>
			<div id="data4" class="window">
				<?php $id = 6; include('tabs/datasheet1.php'); ?>
			</div>
		</div>
	</div>
	<script src="js/jquery-3.2.1.js"></script>
	<script src="js/modal/modal.js"></script>
</body>
</html>