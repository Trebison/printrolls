<?php

	include('../../app/session.php');

	$consulta = "SELECT * FROM printrolls";
	if($result = $mysqli->query($consulta)){
		$row = $result->fetch_array();

		echo '<head>';
			echo '<title>Printrolls Admin Panel: Footer</title>';
			echo '<link rel="stylesheet" type="text/css" href="../css/style.css">';
			echo '<link rel="stylesheet" type="text/css" href="../../fonts/icons.css">';
			echo '<link rel="stylesheet" type="text/css" href="../../fonts/montserrat.css">';
		echo '</head>';
		echo '<body>';
			echo '<div class="back">';
				echo '<a href="index.php"><i class="icon-arrow"></i></a>';
			echo '</div>';
		echo '<h1>PRODUCTOS</h1>';

		echo '<div class="box2">';

			echo '<img src="../../img/wallpapers/'.$row['productos'].'">';

			echo '<a href="../../img/wallpapers/'.$row['productos'].'" download>Descargar</a>';

		echo '</div>';

		echo "<form method='POST' action='wallpaper2.php' enctype='multipart/form-data'>";
			echo "<input type='file' name='wallpaper'>";
			echo "<input type='submit' name='send' value='Cambiar'>";
		echo "</form>";

		echo '</body>';
	}

	if(isset($_POST['send'])){

		$raiz = $_SERVER['DOCUMENT_ROOT'];

		$folder = $raiz.'/printrolls/img/wallpapers/';
		if (!file_exists($folder)){
			mkdir($folder, 0777, true);
		}

		$wallpaper = $_FILES['wallpaper']['tmp_name'];
		$wallpaper_name = $_FILES['wallpaper']['name'];
		$wallpaper_size = $_FILES['wallpaper']['size'];
		$wallpaper_rename = 'productos.jpg';
		move_uploaded_file($wallpaper,$folder.'/'.$wallpaper_rename);
		$ruta_wallpaper = $wallpaper_rename; 

		$sql = "UPDATE printrolls SET productos='$ruta_wallpaper'";
		if($resultado = $mysqli->query($sql)){
			echo "<div class='alert'>Los datos se han modificado con Exito</div>".'<br>';
			echo "<script>setTimeout(location.href = 'wallpaper2.php',3);</script>";
		}
		else{
			echo "<div class='error'>Los datos se no se han podido modificar</div>".'<br>';
			echo "<script>setTimeout(location.href = 'wallpaper2.php',3);</script>";
		}
	}

?>