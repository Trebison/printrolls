<?php

	include('../../app/session.php');
	echo '<head><meta http-equiv="Content-Type" content="text/html; charset=gb18030">';
		echo '<title>Printrolls Admin Panel: Usuarios</title>';
		echo '<link rel="stylesheet" type="text/css" href="../css/style.css">';
		echo '<link rel="stylesheet" type="text/css" href="../../fonts/icons.css">';
		echo '<link rel="stylesheet" type="text/css" href="../../fonts/montserrat.css">';
	echo '</head>';
	echo '<body>';

	if(isset($_GET['id']) AND isset($_GET['action'])){

		$id = $_GET['id'];
		$ac = $_GET['action'];
		$back = $_GET['back'];
		
		if($ac == md5('1')){
			echo '<div class="back">';
				echo '<a href="index.php"><i class="icon-arrow"></i></a>';
			echo '</div>';
		
			$consulta = "SELECT * FROM medio";
			if($resultado = $mysqli->query($consulta)){
				while($row = $resultado->fetch_assoc()){
					$id_medio = md5($row['id_medio']);
					$id_affectd = $row['id_medio'];
					if($id == $id_medio){
						if($ac == md5('1')){
							echo '<form action="action.php" method="POST">';
								echo '<input type="text" name="id" value="'.$row['id_medio'].'" hidden>';
								echo '<input type="text" name="back" value="'.$back.'" hidden>';
								echo '<input type="text" name="nombre" value="'.$row['nombre'].'" required>';
								echo '<input type="text" name="medio" value="'.$row['medio'].'" required>';
								echo '<input type="text" name="horario" value="'.$row['horario'].'" required>';
								echo '<input type="submit" name="send" value="Modificar">';
							echo '</form>';
						}			
						if($ac == md5('2')){

							$mysqli->query("DELETE FROM medio WHERE id_medio='$id_affectd'");
							echo 'El registro se ha eliminado';
							header("Refresh: 3; ".$back.".php");
							echo "<script>setTimeout(location.href = '".$back.".php',3);</script>";
						}
					}
				}
			}
		}
		if($ac == md5('2')){
			echo '<div class="alert">¿Está Seguro que desea Eliminar esta información?<br>';
			echo '<a href="action.php?id='.$id.'&action='.md5('3').'&back='.$back.'">Si</a>';
			echo '<a href="action.php?id='.md5($id).'&action='.md5('4').'&back='.$back.'">No</a></div>';
		}
		if($ac == md5('3')){
			$id = $_GET['id'];
			$consulta = "SELECT * FROM medio";
			if($result = $mysqli->query($consulta)){
				while($row = $result->fetch_array()){

					$id_medio = md5($row['id_medio']);
					$id_affectd = $row['id_medio'];
					if($id == $id_user){
						$mysqli->query("DELETE FROM medio WHERE id_medio='$id_affectd'");
						echo '<div class="alert">El registro se ha eliminado</div>';
						echo "<script>setTimeout(location.href = '".$back.".php',3);</script>";
					}

				}
			}
		}
		if($ac == md5('4')){
			echo '<div class="alert">La información NO ha sido eliminada</div>';
			echo "<script>setTimeout(location.href = '".$back.".php',3);</script>";
		}
	}

	if(isset($_POST['send'])){
		
		$id = $_POST['id'];
		$nombre = $_POST['nombre'];
		$medio = $_POST['medio'];
		$horario = $_POST['horario'];
		$back = $_POST['back'];

		$sql = "UPDATE medio SET nombre='$nombre', medio='$medio', horario='$horario' WHERE id_medio='$id'";
		if($resultado = $mysqli->query($sql)){
			echo "<div class='alert'>Los datos se han modificado con Exito</div>";
			echo "<script>setTimeout(location.href = '".$back.".php',3);</script>";
		}
		else{
			echo "<div class='error'>Los datos se no se han podido modificar</div>";
			echo "<script>setTimeout(location.href = '".$back.".php',3);</script>";
		}
	}
	if(isset($_POST['new'])){

		$id = $_POST['id'];
		$nombre = $_POST['nombre'];
		$medio = $_POST['medio'];
		$horario = $_POST['horario'];

		$action = "INSERT INTO medio (medio,nombre,horario,contacto_id) VALUES ('$medio','$nombre','$horario','$id')";
		if($mysqli->query($action)){
			echo "<div class='alert'>Medio de Contacto Creado con Exito</div>";
			echo "<script>setTimeout(location.href = 'index.php',3);</script>";
		}
		else{
			echo "<div class='error'>Error en la Consulta</div>";
			echo "<script>setTimeout(location.href = 'index.php',3);</script>";
		}
	}

	echo '</body>';

?>
