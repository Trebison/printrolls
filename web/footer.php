
<?php 

	$footer = "SELECT * FROM printrolls";
	if($footeri = $mysqli->query($footer)){
		while($row = $footeri->fetch_assoc()){
			echo $row['pie'];
		}
	}

?>