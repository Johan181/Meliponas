<?php include('conexion.php') ?>
<?php

    $idColmena = $_GET['idColmena'];
    $query = "DELETE FROM bitacora WHERE idColmena='$idColmena'";
    $resultado = $con -> query($query);
    $query = "DELETE FROM colmena WHERE idColmena='$idColmena'";
    $resultado = $con -> query($query);


    if($resultado)
    {
        header ("Location: ../index.php");
    }
?>
