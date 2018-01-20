<?php $title = "Laminados"; include("app/conex.php");?>
<!DOCTYPE html>
<html>
<head>
	<title><?php echo $title; $id = 7; ?></title>
	<meta charset="UTF-8"/>
	<meta name="viewport" content="width-decive-width, user-scalable=no, initial-scale=1, maximun-scale=1, minimun-scale=1"/>
	<link rel="stylesheet" href="fonts/icons.css"/>
	<link rel="stylesheet" href="fonts/montserrat.css"/>
	<link rel="stylesheet" type="text/css" href="css/style.css">
	<link rel="stylesheet" type="text/css" href="css/menu.css">
	<link rel="stylesheet" type="text/css" href="css/animation.css">
	<link rel="shortcut icon" href="img/favicon.png" />
</head>
<body>
	<header>
		<?php include("web/menu_back.php"); ?>
	</header>
	<main>
		<span class="go_top"><i class="icon-up"></i></span>
		<div class="block-l0">
			<img src="img/items/B&M.jpg">
		</div>
		<div class="block-l4" style="background: #f3f3f3">
			<div class="block-left">
			<?php
				$mercancia = "SELECT * FROM mercancia WHERE id_mercancia = '$id'";
				if($result = $mysqli->query($mercancia)){
					while($row = $result->fetch_assoc()){
						echo '<h3>'.$row['mercancia'].'</h3>';;
						echo '<p>';
							echo $row['descripcion'];
						echo '</p>';
					}
				}
			?>
			</div>
			<div class="block-right">
				<?php include ('tabs/datasheet3.php'); ?>
			</div>
		</div>
		<div class="block-l4" style="background: #333333">
			<div class="block-left">
				<text style="color: white">Para Tarjetas</text>
			</div>
			<div class="block-right">
				<div class="img"><img src="img/items/cards.png"></div>
			</div>			
		</div>
		<div class="block-l4" style="background: #c1c1c1">
			<div class="block-left">
				<div class="img"><img src="img/items/catalog.png"></div>
			</div>
			<div class="block-right">
				<text>Para Catalogos</text>
			</div>			
		</div>
		<div class="block-l4" style="background: #f3f3f3">
			<div class="block-left">
				<text>Realza los Colores</text>
			</div>
			<div class="block-right">
				<div class="img"><img src="img/items/lamincard.png"></div>
			</div>			
		</div>
	</main>
	<footer>
		
	</footer>
	<script src="js/jquery-3.2.1.js"></script>
	<script src="js/scroll/go_top.js"></script>
</body>
</html>