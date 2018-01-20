<?php

    include('app/conex.php');

    $id = 2;
    $consulta = "SELECT * FROM medio WHERE contacto_id='$id' LIMIT 1";
	if($resultado = $mysqli->query($consulta)){
	    while($row = $resultado->fetch_assoc()){
        	$mail = $row['medio'];
        	$subject = '['.$_POST['subjet'].'] '.$_POST['mail'];
        	$body = $_POST['body'];
        	$header = 'Mensaje de: '.$_POST['name'].' ('.$_POST['mail'].')';
        
        	$send = mail($mail,$subject,$body,$header);
        	if($send){
        	 	echo "Tu mensaje ha sido enviado";
        	    echo "<script>location.href = 'http://www.printrollspty.com';</script>";
        	}else{
        	 	echo "Tu mensaje no ha podido ser enviado";
        	    echo "<script>location.href = 'http://www.printrollspty.com';</script>";
        	}  
	    }
	}

?>