<?php
    include("conexion.php");
    require 'Qr/qrlib.php';

    $id=$_REQUEST['idColmena'];
    $query = "SELECT * FROM colmena WHERE idColmena='$id'";
    $resultado = $con -> query($query);
    $row = $resultado -> fetch_assoc();

    $dir = '../../../image/QR/'.$row['idColmena'];

    $url = "https://meliponario.000webhostapp.com/Meliponas/Editor/Bitacora/agre_BitacoraEditor.php?idColmena={$id}";

    $filename = $dir.'.png';
    $tamanio = 3;
    $level = 'H';
    $frameSize = 3;

    QRcode::png($url, $filename, $level, $tamanio, $frameSize);
    echo '<img src ="'.$filename.'" />';
    echo $row['idColmena'];
    //header("Location: $filename");
?>