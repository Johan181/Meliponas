<?php include('conexion.php') ?>
<?php
    $idUsuario = $_REQUEST['idUsuario'];
    $nombre = $_POST['nombre'];
    $apellidoP = $_POST['apellidoP'];
    $apellidoM = $_POST['apellidoM'];
    $tipo = $_POST['tipo'];
    $user = $_POST['user'];
    $pass = $_POST['pass'];

    $query = "UPDATE usuario SET nombre='$nombre',apellidoP='$apellidoP',apellidoM='$apellidoM',tipo='$tipo',user='$user',pass='$pass' WHERE idUsuario='$idUsuario' ";

    $resultado = $con -> query($query);

    if($resultado)
    {
        header ("Location: tablaRegistro.php");
    }
?>
