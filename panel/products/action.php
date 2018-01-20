<?php

	include('../../app/session.php');

	echo '<head>';
		echo '<title>Printrolls Admin Panel: Productos</title>';
		echo '<link rel="stylesheet" type="text/css" href="../css/style.css">';
		echo '<link rel="stylesheet" type="text/css" href="../../fonts/icons.css">';
		echo '<link rel="stylesheet" type="text/css" href="../../fonts/montserrat.css">';
	echo '</head>';
	echo '<body>';

	if(isset($_GET['id']) AND isset($_GET['action'])){
		
		$id = $_GET['id'];
		$ac = $_GET['action'];
		
		if($ac == md5('1')){
			$consulta = "SELECT * FROM ficha";
			if($resultado = $mysqli->query($consulta)){
				while($row = $resultado->fetch_assoc()){
					$id_medio = md5($row['id_dato']);
					$id_affectd = $row['id_dato'];
					if($id == $id_medio){
						if($ac == md5('1')){

							echo '<div class="back">';
								echo '<form method="POST" action="card.php">';
								echo '<input type="text" name="id" value="'.$row['mercancia_id'].' '.$row['mercancia_id'].'" hidden>';
								echo '<i class="icon-arrow"></i>';
								echo '<input type="submit" name="select" value=" ">';
								echo '</form>';
							echo '</div>';

							echo '<form action="action.php" method="POST">';
								echo '<input type="text" name="id" value="'.$row['id_dato'].'" hidden>';
								echo "<input type='text' name='medida' value=".$row["medida"]." required>";
								echo '<input type="text" name="peso" value="'.$row['peso'].'" required>';
								echo '<input type="text" name="dato" value="'.$row['dato'].'" required>';
								echo '<input type="text" name="acabado" value="'.$row['acabado'].'" required>';
								echo '<input type="text" name="durabilidad" value="'.$row['durabilidad'].'" required>';
								echo '<input type="submit" name="send" value="Modificar">';
							echo '</form>';
						}			
						if($ac == md5('2')){

							$mysqli->query("DELETE FROM ficha WHERE id_dato='$id_affectd'");
							echo "<div class='alert'>El registro se ha eliminado</div>";
							echo "<script>setTimeout(location.href = 'products.php',3);</script>";
						}
					}
				}
			}
		}
		if($ac == md5('2')){
			$id = $_GET['id'];
			echo '<div class="alert">¿Está Seguro que desea Eliminar esta información?<br>';
			echo '<a href="action.php?id='.$id.'&action='.md5('3').'">Si</a>';
			echo '<a href="action.php?id='.md5($id).'&action='.md5('4').'">No</a></div>';
		}
		if($ac == md5('3')){
			$id = $_GET['id'];
			$consulta = "SELECT * FROM ficha";
			if($result = $mysqli->query($consulta)){
				while($row = $result->fetch_array()){

					$id_dato = md5($row['id_dato']);
					$id_affectd = $row['id_dato'];
					if($id == $id_dato){
						$mysqli->query("DELETE FROM ficha WHERE id_dato='$id_affectd'");
						echo '<div class="alert">El registro se ha eliminado</div>';
						echo "<script>setTimeout(location.href = 'products.php',3);</script>";
					}

				}
			}
		}
		if($ac == md5('4')){
			echo '<div class="alert">La información no ha sido eliminada</div>';
			echo "<script>setTimeout(location.href = 'products.php',3);</script>";
		}
	}

	if(isset($_POST['send'])){
		
		$id = $_POST['id'];
		$medida = $_POST['medida'];
		$peso = $_POST['peso'];
		$dato = $_POST['dato'];
		$acabado = $_POST['acabado'];
		$durabilidad = $_POST['durabilidad'];

		$sql = "UPDATE ficha SET medida='$medida', peso='$peso', dato='$dato', acabado='$acabado', durabilidad='$durabilidad' WHERE id_dato='$id'";
		if($resultado = $mysqli->query($sql)){
			echo "<div class='alert'>Los datos se han modificado con Exito</div>".'<br>';
			echo "<script>setTimeout(location.href = 'products.php',10);</script>";
		}
		else{
			echo "<div class='error'>Los datos se no se han podido modificar</div>".'<br>';
			echo "<script>setTimeout(location.href = 'products.php',10);</script>";
		}
	}
	if(isset($_POST['new'])){

		$medida = $_POST['medida'];
		$peso = $_POST['peso'];
		$dato = $_POST['dato'];
		$acabado = $_POST['acabado'];
		$durabilidad = $_POST['durabilidad'];
		$id = $_POST['mercancia_id'];

		$action = "INSERT INTO ficha (medida,peso,dato,acabado,durabilidad,mercancia_id) VALUES ('$medida','$peso','$dato','$acabado','$durabilidad','$id')";
		if($mysqli->query($action)){
			echo "<div class='alert'>Dato en Ficha Creado con Éxito".'<br><br>';
			echo "¿Desea Crear Otro Dato en la misma Ficha?<br>";
			echo '<a href="new.php?new='.md5($id).'">Si</a>';
			echo '<a href="products.php">No</a></div>';
		}
		else{
			echo "<div class='error'>Error en la Consulta</div>".'<br>';
			echo "<script>setTimeout(location.href = 'products.php',3);</script>";
		}
	}
	if(isset($_GET['crip'])){
		$id = $_GET['crip'];

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

					echo '<form method="POST" action="action.php">';
						echo '<label>Descripción: </label>';
						echo '<input type="text" name="id" value="'.$id_merca.'" hidden>';
						echo '<textarea name="descripcion">'.$row['descripcion'].'</textarea>';
						echo '<input type="submit" name="crip" value="Enviar">';
					echo '</form>';
				}
			}
		}
	}
	if(isset($_POST['crip'])){

		$id = $_POST['id'];
		$descripcion = $_POST['descripcion'];
		$sql = "UPDATE mercancia SET descripcion='$descripcion' WHERE id_mercancia='$id'";
		if($resultado = $mysqli->query($sql)){
			echo "<div class='alert'>Los datos se han modificado con Exito</div>";
			echo "<script>setTimeout(location.href = 'index.php',3);</script>";
		}
		else{
			echo "<div class='error'>Los datos se no se han podido modificar</div>";
			echo "<script>setTimeout(location.href = 'products.php',3);</script>";
		}
	}
	if(isset($_GET['avtr'])){

		$id = $_GET['avtr'];
		$consulta = "SELECT * FROM mercancia";
		if($result = $mysqli->query($consulta)){
			while($row = $result->fetch_array()){
				$id_merca = md5($row['id_mercancia']);
				$id_affectd = $row['id_mercancia'];
				if($id == $id_merca){
					echo '<div class="back">';
						echo '<form method="POST" action="card.php">';
						echo '<input type="text" name="id" value="'.$id_affectd.' '.$row['producto_id'].'" hidden>';
						echo '<i class="icon-arrow"></i>';
						echo '<input type="submit" name="select" value=" ">';
						echo '</form>';
					echo '</div>';

					echo "<div class='avatar'><img src='../../img/thumbs/".$row['avatar']."'></div>";

					echo "<form method='POST' action='action.php' enctype='multipart/form-data'>";
						echo "<input type='text' name='id' value='".$id_affectd."' hidden>";
						echo "<input type='file' name='avatar'>";
						echo "<input type='submit' name='avtr' value='Cambiar'>";
					echo "</form>";
				}
			}
		}
	}
	if(isset($_POST['avtr'])){

		$id = $_POST['id'];
		$raiz = $_SERVER['DOCUMENT_ROOT'];

		$folder = $raiz.'/printrolls/img/thumbs/';
		if (!file_exists($folder)){
			mkdir($folder, 0777, true);
		}

		$avatar = $_FILES['avatar']['tmp_name'];
		$avatar_name = $_FILES['avatar']['name'];
		$avatar_size = $_FILES['avatar']['size'];
		$ext = end(explode(".", $avatar_name));
		$avatar_rename = 'thumb'.$id.'.'.$ext;
		move_uploaded_file($avatar,$folder.'/'.$avatar_rename);
		$ruta_avatar = $avatar_rename; 

		$sql = "UPDATE mercancia SET avatar='$ruta_avatar' WHERE id_mercancia='$id'";
		if($resultado = $mysqli->query($sql)){
			echo "<div class='alert'>Los datos se han modificado con Exito</div>".'<br>';
			echo "<script>setTimeout(location.href = 'products.php',3);</script>";
		}
		else{
			echo "<div class='error'>Los datos se no se han podido modificar</div>".'<br>';
			echo "<script>setTimeout(location.href = 'products.php',3);</script>";
		}
	}
	if(isset($_GET['picture'])){
		$id = $_GET['id'];

		echo '<div class="back">';
			echo '<a href="muestra.php"><i class="icon-arrow"></i></a>';
		echo '</div>';

		echo '<h1>SUBIR LA IMAGEN</h1>';

		echo '<form action="action.php" method="POST" enctype="multipart/form-data">';
		echo '<input type="text" name="id" value="'.$id.'" hidden>';
		echo '<input type="file" name="picture">';
		echo '<input type="submit" name="create">';
		echo '</form>';
	}
	if(isset($_POST['create'])){
		$id = $_POST['id'];
		$status = 1;

		$raiz = $_SERVER['DOCUMENT_ROOT'];

		$folder = $raiz.'/printrolls/img/items/';
		if (!file_exists($folder)){
			mkdir($folder, 0777, true);
		}

		$picture = $_FILES['picture']['tmp_name'];
		$picture_name = $_FILES['picture']['name'];
		$picture_size = $_FILES['picture']['size'];
		$ext = end(explode(".", $picture_name));
		$picture_rename = 'item'.$id.'.'.$ext;
		move_uploaded_file($picture,$folder.'/'.$picture_rename);
		$ruta_picture = $picture_rename;

		echo $ruta_picture;

		$sql = "UPDATE muestra SET status=0 WHERE mercancia_id='$id'";
		if($change = $mysqli->query($sql)){
			$action = "INSERT INTO muestra (imagen,status,mercancia_id) VALUES ('$ruta_picture','$status','$id')";
			if($mysqli->query($action)){
				echo "<div class='alert'>La Muestra fue creada con Éxito".'<br><br>';
				echo "<script>window.setTimeout(location.href = 'muestra.php',3);</script>";

			}
			else{
				echo "<div class='error'>Error en la Consulta</div>".'<br>';
				echo "<script>window.setTimeout(location.href = 'muestra.php',3);</script>";
			}
		}
		else{
			echo "<div class='error'>Los datos se no se han podido modificar</div>".'<br>';
			echo "<script>setTimeout(location.href = 'muestra.php',10);</script>";
		}
	}

?>
