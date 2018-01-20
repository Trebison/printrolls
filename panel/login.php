<?php

	if(isset($_POST["send"])){

		session_start();
		require("../app/conex.php");

		if(isset($_POST['user']) AND isset($_POST['password'])){

			$loguser = $_POST['user'];
			$logpass = $_POST['password'];

			$login = "SELECT * FROM admin WHERE user='$loguser'";
			if($result = $mysqli->query($login)){
				while($row = $result->fetch_array()){

					$id = $row['id_user'];
					$user = $row['user'];
					$pass = $row['password'];

					$same = password_verify($logpass,$pass);

					if($same){
						$_SESSION["log"] = $id;
						echo "<script>location.href = 'app.php';</script>";
					//	header('location: app.php');
					}
					else{
						echo " Contraseña Incorrecta...";
						echo "<script>location.href = 'index.php';</script>";
					}
				}
			}
			else{
			    echo " Datos Incorrectos...";
			    echo "<script>location.href = 'index.php';</script>";
			}
			echo " Datos Incorrectos...";
			echo "<script>location.href = 'index.php';</script>";
		}
		else{
			echo " Datos Incorrectos...";
			echo "<script>location.href = 'index.php';</script>";
		}

	}

?>