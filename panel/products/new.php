<?php


	include('../../app/session.php');

	echo '<head>';
		echo '<title>Printrolls Admin Panel: Productos</title>';
		echo '<link rel="stylesheet" type="text/css" href="../css/style.css">';
		echo '<link rel="stylesheet" type="text/css" href="../../fonts/icons.css">';
		echo '<link rel="stylesheet" type="text/css" href="../../fonts/montserrat.css">';
	echo '</head>';
	echo '<body>';

	if(isset($_GET['new'])){
		$id = $_GET['new'];

		$consulta = "SELECT * FROM mercancia";
		if($resultado = $mysqli->query($consulta)){
			while($row = $resultado->fetch_assoc()){	
				$id_mercancia = md5($row['id_mercancia']);
				$id_merca = $row['id_mercancia'];
				if($id == $id_mercancia){
						echo '<div class="back">';
							echo '<form method="POST" action="card.php">';
							echo '<input type="text" name="id" value="'.$id_merca.' '.$row['producto_id'].'" hidden>';
							echo '<i class="icon-arrow"></i>';
							echo '<input type="submit" name="select" value=" ">';
							echo '</form>';
						echo '</div>';

						echo '<form action="action.php" method="POST">';
							echo '<input type="text" name="medida" placeholder="Medida">';
							echo '<input type="text" name="peso" placeholder="Peso">';
							echo '<input type="text" name="dato" placeholder="Composición / Largo">';
							echo '<input type="text" name="acabado" placeholder="Acabado">';
							echo '<input type="text" name="durabilidad" placeholder="Durabilidad">';
							echo '<input type="text" name="mercancia_id" value="'.$id_merca.'" hidden>';
							echo '<input type="submit" name="new" value="Crear">';
						echo '</form>';
				}
			}
		}
	}

	echo '</body>';

?>