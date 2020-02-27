<?php include('conexion.php') ?>
<?php
    $idUsuario = $_GET['idUsuario'];

    $query = "DELETE FROM usuario WHERE idUsuario='$idUsuario' ";

    $resultado = $con -> query($query);

    if($resultado)
    {
        header ("Location: tablaRegistro.php");
    }
?>
