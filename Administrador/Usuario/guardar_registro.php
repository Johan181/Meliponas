<?php include('conexion.php') ?>
<?php
    $nombre = $_POST['nombre'];
    $apellidoP = $_POST['apellidoP'];
    $apellidoM = $_POST['apellidoM'];
    $tipo = $_POST['tipo'];
    $user = $_POST['user'];
    $pass = $_POST['pass'];

    $query = "INSERT INTO usuario (nombre,apellidoP,apellidoM,tipo,user,pass) VALUES ('$nombre','$apellidoP','$apellidoM','$tipo','$user','$pass')";

    $resultado = $con -> query($query);

    if($resultado)
    {
        header ("Location: tablaRegistro.php");
    }

?>
