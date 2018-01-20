
<?php 

	$team = "SELECT * FROM printrolls";
	if($teami = $mysqli->query($team)){
		while($row = $teami->fetch_assoc()){
			echo $row['equipo'];
		}
	}

?>