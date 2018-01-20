<?php

	include('../../app/session.php');

	echo '<head>';
		echo '<title>Printrolls Admin Panel: Productos</title>';
		echo '<link rel="stylesheet" type="text/css" href="../css/style.css">';
		echo '<link rel="stylesheet" type="text/css" href="../../fonts/icons.css">';
		echo '<link rel="stylesheet" type="text/css" href="../../fonts/montserrat.css">';
	echo '</head>';
	echo '<body>';

	if(isset($_POST['select'])){


		$valor = $_POST['id'];
		$valor = explode(' ', $valor);
		$id = $valor[0];
		$producto = $valor[1];

		if($id == 0){
			echo "<div class='error'>No haz seleccionado un Producto</div>";
			echo "<script>setTimeout(location.href = 'products.php',3);</script>";
		}
		else{
			echo '<div class="back">';
				echo '<a href="products.php"><i class="icon-arrow"></i></a>';
			echo '</div>';
			echo '<h1>Producto seleccionado: '.$producto.'</h1>';

			echo '<form method="POST" action="card.php">';
				echo '<select name="id">';
					$consulta = "SELECT * FROM mercancia WHERE producto_id = '$id'";
					if($resultado = $mysqli->query($consulta)){
						while($row = $resultado->fetch_assoc()){
							echo '<option value="'.$row['id_mercancia'].' '.$row['producto_id'].'">'.$row['mercancia'].'</option>';
						}
						echo '</select>';
					}
				echo '<input type="submit" name="select" value="Seleccionar">';
			echo '</form>';
		}
		
	}else{
		echo "<div class='error'>No haz seleccionado un Producto</div>";
		echo "<script>setTimeout(location.href = 'products.php',3);</script>";
	}
	echo '</body>';