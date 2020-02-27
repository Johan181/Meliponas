<?php include('conexion.php') ?>
<?php
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
