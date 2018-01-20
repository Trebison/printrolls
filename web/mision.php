
<?php 

	$mision = "SELECT * FROM printrolls";
	if($misioni = $mysqli->query($mision)){
		while($row = $misioni->fetch_assoc()){
			echo $row['mision'];
		}
	}

?>