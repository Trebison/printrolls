<?php

	include('../../app/session.php');
	
	echo '<head>';
		echo '<title>Printrolls Admin Panel: Usuarios</title>';
		echo '<link rel="stylesheet" type="text/css" href="../css/style.css">';
		echo '<link rel="stylesheet" type="text/css" href="../../fonts/icons.css">';
		echo '<link rel="stylesheet" type="text/css" href="../../fonts/montserrat.css">';
	echo '</head>';
	echo '<body>';

	if(isset($_GET['id']) AND isset($_GET['action'])){
		$id = $_GET['id'];
		$ac = $_GET['action'];

		if($ac ==md5('1')){

			echo '<div class="back">';
				echo '<a href="list.php"><i class="icon-arrow"></i></a>';
			echo '</div>';

			$consulta = "SELECT * FROM Admin";
			if($resultado = $mysqli->query($consulta)){
			while($row = $resultado->fetch_assoc()){
					$id_user = md5($row['id_user']);
					$id_affectd = $row['id_user'];
					if($id == $id_user){
						echo '<form method="POST" action="action.php">';
							echo '<input type="text" name="id" value="'.$id_affectd.'" hidden>';
							echo '<input type="text" name="user" value="'.$row['user'].'">';
							echo '<input type="submit" name="send" value="Modificar">';
						echo '</form>';
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
			$consulta = "SELECT * FROM admin";
			if($result = $mysqli->query($consulta)){
				while($row = $result->fetch_array()){

					$id_user = md5($row['id_user']);
					$id_affectd = $row['id_user'];
					if($id == $id_user){
						$mysqli->query("DELETE FROM admin WHERE id_user='$id_affectd'");
						echo '<div class="alert">El registro se ha eliminado</div>';
						//header("Refresh: 3; list.php");
			            echo "<script>setTimeout(location.href = 'list.php',3);</script>";
					}

				}
			}
		}
		if($ac == md5('4')){
			echo '<div class="alert">La información NO ha sido eliminada</div>';
			echo "<script>setTimeout(location.href = 'list.php',3);</script>";
		}
	}

	echo '</body>';

	if(isset($_POST['send'])){

		$id = $_POST['id'];
		$admin = $_POST['user'];

		$sql = "UPDATE admin SET user='$admin' WHERE id_user='$id'";
		if($resultado = $mysqli->query($sql)){
			echo "<div class='alert'>Los datos se han modificado con Exito</div>";
			echo "<script>setTimeout(location.href = 'list.php',3);</script>";
		}
		else{
			echo "<div class='error'>Los datos se no se han podido modificar</div>";
			echo "<script>setTimeout(location.href = 'list.php',3);</script>";
		}
	}

	if(isset($_POST["new"])){

		if(isset($_POST["user"]) AND isset($_POST["pass1"]) AND isset($_POST["pass2"])){

			$user = $_POST['user'];
			$pass1 = $_POST['pass1'];
			$pass2 = $_POST['pass2'];
			$consulta = "SELECT * FROM admin WHERE user='$user'";
			if($result = $mysqli->query($consulta)){
				$row = $result->fetch_array();

					$users = $row['user'];
					if($user == $users){
						echo "<div class='error'>Usuario Ya Existe</div>";
						echo "<script>setTimeout(location.href = 'new.php',3);</script>";
					}
					else{
						if($pass1 == $pass2){

							if($pass1 == NULL OR $pass2 == NULL){
								echo "Debes Agregar una Contraseaña";
							}
							else{
								$pswhash = password_hash($pass1, PASSWORD_BCRYPT);
								$action = "INSERT INTO admin (user,password) VALUES ('$user','$pswhash')";
								if($mysqli->query($action)){
									echo "<div class='alert'>Usuario Creado con Exito</div>";
									echo "<script>setTimeout(location.href = 'list.php',3);</script>";
								}
								else{
									header("Refresh: 3; new.php");
									echo "<script>setTimeout(location.href = 'new.php',3);</script>";
								}
							}
						}
						else{
							echo "<div class='error'>Las Contraseñas No Coinciden</div>";
                            echo "<script>setTimeout(location.href = 'new.php',3);</script>";
						}
					}
			}
			else{
				echo "<div class='error'>Error en la Consulta</div>";
				echo "<script>setTimeout(location.href = 'new.php',3);</script>";
			}
		}
		else{
			echo "<div class='error'>Datos Incorrectos</div>";
			echo "<script>setTimeout(location.href = 'new.php',3);</script>";
		}
	}

?>