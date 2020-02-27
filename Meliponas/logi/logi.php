<?php
	require 'conexion.php';
	session_start();

	$usuario = $_POST['usuario'];
	$pass = $_POST['pass'];

	$dato = "select count(*) as contar from usuario where user = '$usuario' and pass = '$pass'";
	$consulta = mysqli_query($conexion, $dato);
	$array = mysqli_fetch_array($consulta);
	
	$tipo = mysqli_query($conexion, "SELECT tipo FROM usuario WHERE user = '$usuario' AND pass = '$pass'");
	$tip = mysqli_fetch_array($tipo);


	if ($array['contar']>0) 
	{
		switch ($tip['tipo']) 
		{
			case 'administrador':
			$_SESSION['username'] = $usuario;
			header("location: ../Administrador/index.php");

				# code...
				break;
			
			case "editor":
			$_SESSION['username'] = $usuario;
			header("location: ../Editor/Bitacora/inicio.php");
				# code...
				break;
		}
		
	}
	else
	{
		header("location: ../index.php");
	}



?>