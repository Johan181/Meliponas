<?php include('conexion.php') ?>
<?php
    $idColmena = $_POST['idColmena'];
    $procedencia = $_POST['procedencia'];
    $fecha = $_POST['fecha'];
    $descripcion = $_POST['descripcion'];
    $foto = $_FILES['foto']['name'];
    $ruta = $_FILES['foto']['tmp_name'];
    $destino = '../../image/'.$foto;
    copy($ruta,$destino);

    $query = "UPDATE colmena SET idColmena='$idColmena',procedencia='$procedencia',fecha='$fecha',descripcion='$descripcion',foto='$destino' WHERE idColmena='$idColmena' ";

    $resultado = $con->query($query);

    if($resultado)
    {
        header ("Location: ../index.php");
    }
?>
