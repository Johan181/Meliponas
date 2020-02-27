<?php
    include('conexion.php');
    session_start();
    if(isset($_SESSION['username']))
    {
        $usuario = $_SESSION['username'];
        $tipo = mysqli_query($con, "SELECT tipo FROM usuario WHERE user = '$usuario'");
        $tip = mysqli_fetch_array($tipo);
    }else{
        header("location: ../../registrar.html");
    }
    
    if($tip['tipo'] != 'administrador') 
    {
        header("location: ../../registrar.html");
    }
?>

<?php

  $idColmena = $_GET['idColmena'];
  $query = "SELECT * FROM colmena WHERE idColmena=$idColmena";
  $resultado = $con -> query($query);
  $fila = $resultado -> fetch_assoc();
?>

<?php echo '<img src="'.$fila['foto'].'"/>'; ?>