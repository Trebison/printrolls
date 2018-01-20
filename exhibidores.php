<?php $title = "Exhibidores"; include("app/conex.php"); ?>
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
			<div class="exh1">
				<a class="exh-int1" style="background-image: url(img/items/exh1.jpg)" href="#data1" name="modal">
					<div class="ov">
						<h3>Roll Ups</h3>
						<div class="info">
							<text>Resistentes Roll Ups para Lonas de</text>
							<text id="meas">33" x 80"</text>
							<text>Interiores & Exteriores</text>
						</div>
					</div>
				</a>
			</div>
			<div class="exh2">
				<a class="exh-int2" style="background-image: url(img/items/exh2.jpg)" href="#data2" name="modal">
					<div class="ov">
						<h3>Arañas</h3>
						<div class="info">
							<text>Estructuras Araña y Araña Doble</text>
							<text id="meas">24" x 63"</text>
							<text>Interiores & Exteriores</text>
						</div>
					</div>
				</a>
			</div>
			<div class="exh3">
				<a class="exh-int3" style="background-image: url(img/items/exh3.jpg)" href="#data3" name="modal">
					<div class="ov">
						<h3>Stands</h3>
						<div class="info">
							<text>Stand Publicitario para Rotular</text>
							<text id="meas">33" x 73"</text>
							<text>Interiores & Exteriores</text>
						</div>
					</div>
				</a>
			</div>
		</div>
		<div class="pile">
			<a href="m/exhibidores.php?id=8&op=00214796ADE226" class="item"><i class="icon-exhibidores"></i>Roll Ups</a>
			<a href="m/exhibidores.php?id=9&op=FREG01472168PT" class="item"><i class="icon-spider"></i>Arañas</a>
			<a href="m/exhibidores.php?id=10&op=KUNJ0051379HB7" class="item"><i class="icon-stands"></i>Stands</a>
		</div>
		<a href="productos.php" id="back-m">Volver</a>
	</main>
	<div id="modal">
		<div id="mask">
			<div id="data1" class="window">
				<?php $id = 8; include('tabs/datasheet2.php'); ?>
			</div>
			<div id="data2" class="window">
				<?php $id = 9; include('tabs/datasheet2.php'); ?>
			</div>
			<div id="data3" class="window">
				<?php $id = 10; include('tabs/datasheet2.php'); ?>
			</div>
		</div>
	</div>
	<script src="js/jquery-3.2.1.js"></script>
	<script src="js/modal/modal.js"></script>
</body>
</html>