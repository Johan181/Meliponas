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

    $idColmena = $_POST['colmena'];
    $procedencia = $_POST['procedencia'];
    $fecha = $_POST['fecha'];
    $descripcion = $_POST['descripcion'];
    $foto = $_FILES['foto']['name'];
    $ruta = $_FILES['foto']['tmp_name'];
    $destino = '../../image/'.$foto;
    copy($ruta,$destino);

    $query = "INSERT INTO colmena (idColmena,procedencia,fecha,descripcion,foto) VALUES ('$idColmena','$procedencia','$fecha','$descripcion','$destino')";

    $resultado = $con -> query($query);

    if($resultado)
    {
        header ("Location: ../index.php");
    }

?>
