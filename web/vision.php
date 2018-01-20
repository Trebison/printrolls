
<?php 

	$vision = "SELECT * FROM printrolls";
	if($visioni = $mysqli->query($vision)){
		while($row = $visioni->fetch_assoc()){
			echo $row['vision'];
		}
	}

?>