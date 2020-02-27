<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Prueba</title>
</head>
<body>
	<?php
	require 'conexion.php';


	$tipo = "SELECT tipo FROM usuario WHERE user = 'admin' AND pass = 'admin'";
	$tip = mysqli_query($conexion, $tipo);
	$ti = mysqli_fetch_array($tip);
	echo $ti['tipo'];
	?>






	
</body>
</html>