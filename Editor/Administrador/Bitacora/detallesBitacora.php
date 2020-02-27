<?php 
  include("conexion.php");
  session_start();
    if(isset($_SESSION['username']))
    {
        $usuario = $_SESSION['username'];
        $tipo = mysqli_query($conexion, "SELECT tipo FROM usuario WHERE user = '$usuario'");
        $tip = mysqli_fetch_array($tipo);
    }else{
        header("location: ../../registrar.html");
    }
    
    if($tip['tipo'] != 'administrador') 
    {
        header("location: ../../registrar.html");
    }

  $idColmena = $_GET['idColmena'];
  $query = "SELECT * FROM colmena WHERE idColmena=$idColmena";
  $resultado = $conexion -> query($query);
  $fila = $resultado -> fetch_assoc();
?>


<!DOCTYPE html>
<!--
This is a starter template page. Use this page to start your new project from
scratch. This page gets rid of all links and provides the needed markup only.
-->
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <!-- Tell the browser to be responsive to screen width -->
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">
    <!-- Favicon icon -->
    <link rel="icon" type="image/png" sizes="16x16" href="../../plugins/images/favicon.png">
    <title>Agregar bitacora</title>
    <!-- Bootstrap Core CSS -->
    <link href="../../bootstrap/dist/css/bootstrap.min.css" rel="stylesheet">
    <!-- Menu CSS -->
    <link href="../../plugins/bower_components/sidebar-nav/dist/sidebar-nav.min.css" rel="stylesheet">
    <!-- Animation CSS -->
    <link href="../../css/animate.css" rel="stylesheet">
    <!-- Custom CSS -->
    <link href="../../css/style.css" rel="stylesheet">
    <!-- color CSS you can use different color css from css/colors folder -->
    <!-- We have chosen the skin-blue (blue.css) for this starter
          page. However, you can choose any other skin from folder css / colors .
-->
    <link href="../../css/colors/blue-dark.css" id="theme" rel="stylesheet">
    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
    <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
    <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
<![endif]-->
</head>

<body>
    <!-- Preloader -->
   
    <div id="wrapper">
        <!-- Navigation -->
        <nav class="navbar navbar-default navbar-static-top m-b-0">
            <div class="navbar-header"> <a class="navbar-toggle hidden-sm hidden-md hidden-lg " href="javascript:void(0)" data-toggle="collapse" data-target=".navbar-collapse"><i class="fa fa-bars"></i></a>
                <div class="top-left-part"><a class="logo" href="../index.php"><b><img src="../../plugins/images/pixeladmin-logo.png" alt="home" /></b>Meliponario</a></div>
                
                <ul class="nav navbar-top-links navbar-right pull-right">
                    <li>
                        <a class="profile-pic" href="#"> <b class="hidden-xs"></b><?php echo $usuario; ?> </a>
                    </li>
                </ul>
            </div>
            <!-- /.navbar-header -->
            <!-- /.navbar-top-links -->
            <!-- /.navbar-static-side -->
        </nav>
        <!-- Menu -->
       
        <?php include("menu.php"); ?>

        <!-- Fin del menu -->
        <!-- Page Content -->
        <div id="page-wrapper">
            <div class="container-fluid">
                
                <div class="row">
                    <div class="col-md-12">
                        <div class="white-box">
                            <!-- Contenido -->
                            <h3 class="box-title">Agregar Bitacora</h3> </div>

                            <div class="row">

    <div class="col-sm-2">
    <img src="itescam.jpg" width="120px" height="130px">
    </div>
    <div class="panel default blue_title h2">
    <div class="col-sm-8">
    <center><h1><br> INSTITUTO TECNOLOGICO SUPERIOR DE CALKINÍ EN EL ESTADO DE CAMPECHE </h1></center>
    <center><h2> CONTROL MELIPONARIO </h2></center>
    <br><br>  <center><h2> BITACORA DE MANEJO DEL MELIPONARIO </h2></center>
    </div>
    </div>
    <div class="col-sm-2">
      <img src="melipona.png" width="120px" height="130px">
    </div>
    </div>
  </div>

<br><br><br> RESPONSABLE:
<br>
<table class="table table-bordered">
<tr>
<th>N°. Colmena: </th>
<th> Lugar de procedencia: </th>
<th> Fecha de establecimiento: </th>
<th> fotografia </th>
<th> opcion para abrir la fotografia </th>
</tr>
<tr>
<th><?php echo $fila['idColmena']; ?></th>
<th><?php echo $fila['procedencia']; ?> </th>
<th><?php echo $fila['fecha']; ?>  </th>
<th><?php echo $fila['foto']; ?>  </th>
<th>  </th>
</tr>
</table>
<br><br> <center>Descripción de la colmena</center>
<br>
<table class="table table-bordered">
<tr>
<th>MELIPONICULTOR:</th>
<?php
date_default_timezone_set('America/Mexico_City');
$fecha=date("Y-m-d H:i:s");

?>



<th> FECHA: <?= $fecha ?> </th>
</tr>
</table>

<form action="guardarRegistro.php" method="post">

<table class="table table-bordered">
<?php
  $idBitacora = $_GET['idBitacora'];
  $query = "SELECT * FROM bitacora WHERE idColmena=$idColmena";
  $resultado = $conexion -> query($query);
  $fila = $resultado -> fetch_assoc();

?>

    <tr>
      <th width="150" height="30"> Manejo realizado</th>
    </tr>
    <tr>
      
      <th>Colmena</th>
    </tr>
    <tr>
      
      <th><input type="text" name="idColmena"></th>
    </tr>
    <tr>  
      <th>Cosecha (volumen)</th>
      <th>Revisión</th>
      <th>Limpieza colmenas</th>
      <th>Limpieza meliponario</th>
    </tr>
    <tr>
      <th><input type="text" name="cosecha"></th>
      <th><input type="text" name="revision"></th>
      <th><input type="text" name="lim_col"></th>
      <th><input type="text" name="lim_meli"></th>
    </tr>
</table>
<br>
<table class="table table-bordered">
    <tr>
      <th>Alimentacion</th>
    </tr>
    <tr>
      <th>Inicio</th>
      <th>Término</th>
      <th>Cantidad de alimento</th>
      <th>N°. de alimentacion</th>
    </tr>
    <tr>
      <th><input type="text" name="a_inicio"></th>
      <th><input type="text" name="a_termino"></th>
      <th><input type="text" name="a_cantidad"></th>
      <th><input type="text" name="a_numero"></th>
    </tr>
</table>
<br>
<table class="table table-bordered">
    <tr>
      <th>Tratamiento</th>
    </tr>
    <tr>
      <th>Dosis aplicada</th>
      <th>Inicio</th>
      <th>Termino</th>
    </tr>
    <tr>
      <th><input type="text" name="dosis"></th>
      <th><input type="text" name="inicio"></th>
      <th><input type="text" name="termino"></th>
    </tr>
</table>
<br><br>
Desarrollo:
<br><textarea class="form-control" name="desarrollo" rows="4" cols="40" placeholder="Escribir el desarrollo" ></textarea>
<br>
<table class="table table-bordered">
  <tr>
    <th>Reforzamiento</th>
  </tr>






  <tr>
    <th>Miel</th>
    <th>Cria</th>
    <th>Abejas</th>
    <th>Cera</th>
    <th>Fecha</th>
  </tr>
  <tr>
      <th><input type="text" name="miel"></th>
      <th><input type="text" name="cria"></th>
      <th><input type="text" name="abeja"></th>
      <th><input type="text" name="cera"></th>
      <th><input type="date" name="fecha"></th>
    </tr>
</table>

Ingredientes de alimento:
<br><textarea class="form-control" name="ingredientes" rows="4" cols="40" placeholder="Escribir ingredientes de alimento"></textarea>
<br>Observaciones:
<br><textarea class="form-control" name="observacion" rows="4" cols="40" placeholder="Escribir las observaciones"></textarea>
<br>
<br>

<button type="submit" class="btn btn-success" name="ejecutar" value="Guardar">Guardar</button>
</form>



          <div class="col-sm-8">








          </div>



                            
       
        

                            <!-- Fin del contenido -->
                    </div>
                </div>
            </div>
            <!-- /.container-fluid -->
            <footer class="footer text-center">ITESCAM</footer>
        </div>
        <!-- /#page-wrapper -->
    </div>
    <!-- /#wrapper -->
    <!-- jQuery -->
    <script src="../../plugins/bower_components/jquery/dist/jquery.min.js"></script>
    <!-- Bootstrap Core JavaScript -->
    <script src="../../bootstrap/dist/js/bootstrap.min.js"></script>
    <!-- Menu Plugin JavaScript -->
    <script src="../../plugins/bower_components/sidebar-nav/dist/sidebar-nav.min.js"></script>
    <!--slimscroll JavaScript -->
    <script src="../../js/jquery.slimscroll.js"></script>
    <!--Wave Effects -->
    <script src="../../js/waves.js"></script>
    <!-- Custom Theme JavaScript -->
    <script src="../../js/custom.min.js"></script>
</body>

</html>
