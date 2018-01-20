<?php
	include("../app/conex.php"); 
	$id = $_GET['id'];
?>
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
		    <br><br>
        	<div class="galeria">
        		<a class="picture" href="#pic1" name="modal"><img src="../img/items/espatula1.jpg"></a>
        		<a class="picture" href="#pic2" name="modal"><img src="../img/items/espatula2.jpg"></a>
        		<a class="picture" href="#pic3" name="modal"><img src="../img/items/espatula3.jpg"></a>
        		<a class="picture" href="#pic4" name="modal"><img src="../img/items/espatula4.jpg"></a>
        		<a class="picture" href="#pic4" name="modal"><img src="../img/items/espatula5.jpg"></a>
        		<a class="picture" href="#pic4" name="modal"><img src="../img/items/espatula6.jpg"></a>
        		<a class="picture" href="#pic4" name="modal"><img src="../img/items/espatula7.jpg"></a>
        	</div>
        	<br><br>
		</div>
		<a href="../accesorios.php" id="back-m">Volver</a>
	</body>
</html>