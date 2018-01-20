<?php

	include('../../app/session.php');


	echo '<head>';
		echo '<title>Printrolls Admin Panel: Mensajes</title>';
		echo '<link rel="stylesheet" type="text/css" href="../css/style.css">';
		echo '<link rel="stylesheet" type="text/css" href="../../fonts/icons.css">';
		echo '<link rel="stylesheet" type="text/css" href="../../fonts/montserrat.css">';
	echo '</head>';
	echo '<body>';
		echo '<div class="back">';
			echo '<a href="index.php"><i class="icon-arrow"></i></a>';
		echo '</div>';
	echo '<h1>SLIDER</h1>';

	echo '<table class="slider">';
		echo '<tr>';
			echo '<td id="slide"><a href="../../img/slider/slide1.jpg" target="_blanck"><img src="../../img/slider/slide1.jpg"></a></td>';
			echo '<td><a href="action.php?slideimg='.md5(1).'">Editar Imagen</a></td>';
			echo '<td><a href="action.php?slidetext='.md5(1).'">Editar Texto</a></td>';
		echo '</tr>';
		echo '<tr>';
			echo '<td id="slide"><a href="../../img/slider/slide2.jpg" target="_blanck"><img src="../../img/slider/slide2.jpg"></a></td>';
			echo '<td><a href="action.php?slideimg='.md5(2).'">Editar Imagen</a></td>';
			echo '<td><a href="action.php?slidetext='.md5(2).'">Editar Texto</a></td>';
		echo '</tr>';
		echo '<tr>';
			echo '<td id="slide"><a href="../../img/slider/slide3.jpg" target="_blanck"><img src="../../img/slider/slide3.jpg"></a></td>';
			echo '<td><a href="action.php?slideimg='.md5(3).'">Editar Imagen</a></td>';
			echo '<td><a href="action.php?slidetext='.md5(3).'">Editar Texto</a></td>';
		echo '</tr>';
		echo '<tr>';
			echo '<td id="slide"><a href="../../img/slider/slide4.jpg" target="_blanck"><img src="../../img/slider/slide4.jpg"></a></td>';
			echo '<td><a href="action.php?slideimg='.md5(4).'">Editar Imagen</a></td>';
			echo '<td><a href="action.php?slidetext='.md5(4).'">Editar Texto</a></td>';
		echo '</tr>';
		echo '<tr>';
			echo '<td id="slide"><a href="../../img/slider/slide5.jpg" target="_blanck"><img src="../../img/slider/slide5.jpg"></a></td>';
			echo '<td><a href="action.php?slideimg='.md5(5).'">Editar Imagen</a></td>';
			echo '<td><a href="action.php?slidetext='.md5(5).'">Editar Texto</a></td>';
		echo '</tr>';
		echo '<tr>';
			echo '<td id="slide"><a href="../../img/slider/slide6.jpg" target="_blanck"><img src="../../img/slider/slide6.jpg"></a></td>';
			echo '<td><a href="action.php?slideimg='.md5(6).'">Editar Imagen</a></td>';
			echo '<td><a href="action.php?slidetext='.md5(6).'">Editar Texto</a></td>';
		echo '</tr>';
	echo '</table>';

	echo '</body>';
?>