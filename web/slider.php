
<div class="slide">
	<ul id="show">

		<?php

		$slider = "SELECT * FROM slider";
		if($slideri = $mysqli->query($slider)){
			while($row = $slideri->fetch_assoc()){
				if($row['id_slider'] == 1){
					echo '<li>';
						echo '<p><b>¡Bienvenido!</b><small><br>Tenemos lo que estás buscando</small></p>';
						echo '<img src="img/slider/'.$row['imagen'].'"></li>';
				}
				if($row['id_slider'] >= 2){
					echo '<li>';
						echo '<text>'.$row['texto'].'</text>';
						echo '<img src="img/slider/'.$row['imagen'].'"></li>';
				}
			}
		}

		?>
	</ul>
	<ul id="pointer">
		<li role='1'><span>&#8226;</span></li>
		<li role='2'><span>&#8226;</span></li>
		<li role='3'><span>&#8226;</span></li>
		<li role='4'><span>&#8226;</span></li>
		<li role='5'><span>&#8226;</span></li>
		<li role='6'><span>&#8226;</span></li>
	</ul>
	<div class="navi">
		<div id="left"><button><</button></div>
		<div id="right"><button>></button></div>
	</div>
</div>