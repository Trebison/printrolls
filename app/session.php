<?php
	include("conex.php");
	session_start();
	if($_SESSION["log"] == TRUE) {
		$user = $_SESSION["log"];
		$sql = "UPDATE admin SET lastsession=NOW() WHERE id_user='$user'";
		$resultado = $mysqli->query($sql);
	}
	else{
		header("location: index.php");
	}
?>