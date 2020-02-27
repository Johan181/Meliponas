<?php
$conexion = mysqli_connect("localhost","root","","meliponario");
if ($conexion->connect_error) 
{
    die("Connection failed: " . $conn->connect_error);
}
?>