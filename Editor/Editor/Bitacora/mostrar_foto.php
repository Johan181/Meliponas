<?php
    include('conexion.php');
    session_start();
    $usuario = $_SESSION['username'];

    $tipo = mysqli_query($conexion, "SELECT tipo FROM usuario WHERE user = '$usuario'");
    $tip = mysqli_fetch_array($tipo);

    if (!isset($usuario) || $tip['tipo'] != 'editor') 
    {
      header("location: ../../index.php");
    }
?>

<?php

  $idColmena = $_GET['idColmena'];
  $query = "SELECT * FROM colmena WHERE idColmena=$idColmena";
  $resultado = $conexion -> query($query);
  $fila = $resultado -> fetch_assoc();
?>

<?php echo '<img src="'.$fila['foto'].'"/>'; ?>