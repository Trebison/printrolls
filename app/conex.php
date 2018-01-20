<?php

	include('database.php');

	$mysqli = new mysqli($host,$user,$pass,$bd);
	if($mysqli->connect_errno){
		echo "No se pudo conectar con la Base de Datos";
	}

?>