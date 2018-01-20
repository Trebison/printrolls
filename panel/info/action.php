<?php

	
	include('../../app/session.php');

	echo '<head>';
		echo '<title>Printrolls Admin Panel: Footer</title>';
		echo '<link rel="stylesheet" type="text/css" href="../css/style.css">';
		echo '<link rel="stylesheet" type="text/css" href="../../fonts/icons.css">';
		echo '<link rel="stylesheet" type="text/css" href="../../fonts/montserrat.css">';
	echo '</head>';
	echo '<body>';

	if(isset($_POST['msj'])){

		$mensaje1 = $_POST['mensaje1'];
		$mensaje2 = $_POST['mensaje2'];
		$mensaje3 = $_POST['mensaje3'];

		$sql = "UPDATE printrolls SET mensaje1='$mensaje1', mensaje2='$mensaje2', mensaje3='$mensaje3'";
		if($resultado = $mysqli->query($sql)){
			echo "<div class='alert'>Los datos se han modificado con Exito</div>";
			echo "<script>setTimeout(location.href = 'msj.php',3);</script>";
		}
		else{
			echo "<div class='error'>Los datos se no se han podido modificar</div>";
			echo "<script>setTimeout(location.href = 'msj.php',3);</script>";
		}
	}
	if(isset($_POST['info'])){

		$equipo = $_POST['equipo'];
		$mision = $_POST['mision'];
		$vision = $_POST['vision'];

		$sql = "UPDATE printrolls SET equipo='$equipo', mision='$mision', vision='$vision'";
		if($resultado = $mysqli->query($sql)){
			echo "<div class='alert'>Los datos se han modificado con Exito</div>";
			echo "<script>setTimeout(location.href = 'info.php',3);</script>";
		}
		else{
			echo "<div class='error'>Los datos se no se han podido modificar</div>";
			echo "<script>setTimeout(location.href = 'info.php',3);</script>";
		}
	}
	if(isset($_POST['footer'])){

		$pie = $_POST['pie'];

		$sql = "UPDATE printrolls SET pie='$pie'";
		if($resultado = $mysqli->query($sql)){
			echo "<div class='alert'>Los datos se han modificado con Exito</div>";
			echo "<script>setTimeout(location.href = 'footer.php',3);</script>";
		}
		else{
			echo "<div class='error'>Los datos se NO se han podido modificar</div>";
			echo "<script>setTimeout(location.href = 'footer.php',3);</script>";
		}
	}
	if(isset($_GET['slideimg'])){
		$id = $_GET['slideimg'];
		$consulta = "SELECT * FROM slider";
		if($resultado = $mysqli->query($consulta)){
			while($row = $resultado->fetch_assoc()){
				$id_slider = md5($row['id_slider']);
				$id_slide = $row['id_slider'];
				if($id == $id_slider){
					echo '<h1>Editar Slider</h1>';
					echo '<form method="POST" action="action.php" enctype="multipart/form-data">';
						echo '<div class="slideimg"><img src="../../img/slider'.$row['imagen'].'"></div>';
						echo '<input type="text" name="post" value="1" hidden>';
						echo '<input type="text" name="id" value="'.$row['id_slider'].'" hidden>';
						echo '<input type="file" name="slide">';
						echo '<input type="submit" name="slidr" value="Cambiar">';
					echo '</form>';
				}
			}
		}
	}
	if(isset($_GET['slidetext'])){
		$id = $_GET['slidetext'];
		$consulta = "SELECT * FROM slider";
		if($resultado = $mysqli->query($consulta)){
			while($row = $resultado->fetch_assoc()){
				$id_slider = md5($row['id_slider']);
				$id_slide = $row['id_slider'];
				if($id == $id_slider){
					echo '<h1>Editar Slider</h1>';
					if($id_slide == '1'){
						echo "<br><div class='error'>Este Texto no se puede modificar</div>";
					}else{
						echo '<form method="POST" action="action.php">';
							echo '<input type="text" name="post" value="2" hidden>';
							echo '<input type="text" name="id" value="'.$row['id_slider'].'" hidden>';
							echo '<input type="text" name="text" value="'.$row['texto'].'">';
							echo '<input type="submit" name="slidr" value="Cambiar">';
						echo '</form>';
					}
				}
			}
		}
	}
	if(isset($_POST['slidr'])){
		$post = $_POST['post'];
		$id = $_POST['id'];

		if($post == '1'){

			$raiz = $_SERVER['DOCUMENT_ROOT'];

			$folder = $raiz.'/printrolls/img/slider/';
			if (!file_exists($folder)){
				mkdir($folder, 0777, true);
			}

			$slide = $_FILES['slide']['tmp_name'];
			$slide_name = $_FILES['slide']['name'];
			$slide_size = $_FILES['slide']['size'];
			$ext = end(explode(".", $slide_name));
			$slide_rename = 'slide'.$id.'.'.$ext;
			if(move_uploaded_file($slide,$folder.'/'.$slide_rename)){
				echo 'Si subió';
			}
			else{
				echo 'No subió';
			}
			$ruta_slide = $slide_rename;

			$sql = "UPDATE slider SET imagen='$ruta_slide' WHERE id_slider='$id'";
			if($resultado = $mysqli->query($sql)){
				echo "<div class='alert'>Los datos se han modificado con Exito</div>".'<br>';
				//echo "<script>setTimeout(location.href = 'slider.php',3);</script>";
			}
			else{
				echo "<div class='error'>Los datos se no se han podido modificar</div>".'<br>';
				//echo "<script>setTimeout(location.href = 'slider.php',3);</script>";
			} 

		}
		if($post == '2'){
			$text = $_POST['text'];

			$sql = "UPDATE slider SET texto='$text' WHERE id_slider='$id'";
			if($resultado = $mysqli->query($sql)){
				echo "<div class='alert'>Los datos se han modificado con Exito</div>".'<br>';
				echo "<script>setTimeout(location.href = 'slider.php',3);</script>";
			}
			else{
				echo "<div class='error'>Los datos se no se han podido modificar</div>".'<br>';
				echo "<script>setTimeout(location.href = 'slider.php',3);</script>";
			} 
		}
	}

	echo '</body>';

?>