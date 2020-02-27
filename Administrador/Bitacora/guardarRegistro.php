<?php include('conexion.php') ?>
<?php
    date_default_timezone_set('America/Mexico_City');
    $fecha=date("Y-m-d H:i:s");
    
    $idColmena= $_POST['idColmena'];
    $idUsuario= $_POST['idUsuario'];
    $cosecha= $_POST['cosecha'];
    $revision= $_POST['revision'];
    $lim_col= $_POST['lim_col'];
    $lim_meli= $_POST['lim_meli'];
    $a_inicio= $_POST['a_inicio'];
    $a_termino= $_POST['a_termino'];
    $a_cantidad= $_POST['a_cantidad'];
    $a_numero= $_POST['a_numero'];
    $dosis= $_POST['dosis'];
    $inicio= $_POST['inicio'];
    $termino= $_POST['termino'];
    $desarrollo= $_POST['desarrollo'];
    $miel= $_POST['miel'];
    $cria= $_POST['cria'];
    $abeja= $_POST['abeja'];
    $cera= $_POST['cera'];
    $fecha= $_POST['fecha'];
    $ingredientes= $_POST['ingredientes'];
    $observacion= $_POST['observacion'];

     $query = "INSERT INTO bitacora (idColmena,idUsuario,cosecha,revision,lim_col,lim_meli,a_inicio,a_termino,a_cantidad,a_numero,dosis,inicio,termino,desarrollo,miel,cria,abeja,cera,fecha,ingredientes,observacion) VALUES('$idColmena','$idUsuario','$cosecha','$revision','$lim_col','$lim_meli','$a_inicio','$a_termino','$a_cantidad','$a_numero','$dosis','$inicio','$termino','$desarrollo','$miel','$cria','$abeja','$cera','$fecha','$ingredientes','$observacion')";

    $resultado = $conexion->query($query);
    if($resultado)
    {
      
        header ("Location: exitoRegistro.php");
    }
   
    

?>
