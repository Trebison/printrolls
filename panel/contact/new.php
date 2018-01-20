<?php include('../../app/session.php'); ?>
<!DOCTYPE html>
<html>
<head>
	<title>Printrolls Admin Panel: New</title>
</head>
<body>
	<a href="index.php">Ir Atrás</a>
	<form method="POST" action="new.php">
		<select name="id">
			<option value="1">Número de Telefono</option>
			<option value="2">Correo Electronico</option>
			<option value="3">Red Social</option>
			<input type="submit" name="select" value="Seleccionar">
		</select>
	</form>
</body>
</html>

<?php

	if(isset($_POST['select'])){

		$id = $_POST['id'];

		echo '<form method="POST" action="action.php">';
		if($id == '1'){
			echo 'Medio de Contacto tipo: Número Telefonico';
			echo '<input type="text" name="id" value="'.$id.'" hidden>';
			echo '<input type="text" name="nombre" placeholder="Nombre" required>';
			echo '<input type="text" name="medio" placeholder="Número" required>';
			echo '<input type="text" name="horario" placeholder="Horario" required>';
		}
		if($id == '2'){
			echo 'Medio de Contacto tipo: Correo Electronico';
			echo '<input type="text" name="id" value="'.$id.'" hidden>';
			echo '<input type="text" name="nombre" placeholder="Nombre" required>';
			echo '<input type="text" name="medio" placeholder="Correo" required>';
			echo '<input type="text" name="horario" placeholder="Horario" required>';
		}
		if($id == '3'){
			echo 'Medio de Contacto tipo: Red Social';
			echo '<input type="text" name="id" value="'.$id.'" hidden>';
			echo '<input type="text" name="nombre" placeholder="Red Social" required>';
			echo '<input type="text" name="medio" placeholder="Enlace" required>';
			echo '<input type="text" name="horario" placeholder="Horario" required>'; 
		}
		echo '<input type="submit" name="new" value="Enviar">';
		echo '</form>';
	}

?>