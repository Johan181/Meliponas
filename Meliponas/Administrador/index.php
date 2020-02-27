<?php
    include('conexion.php');
    session_start();
    $usuario = $_SESSION['username'];
    $tipo = mysqli_query($con, "SELECT tipo FROM usuario WHERE user = '$usuario'");
    $tip = mysqli_fetch_array($tipo);

    if (!isset($usuario) || $tip['tipo'] != 'administrador') 
    {
    	header("location: ../registrar.html");
    }
    
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
    <link rel="icon" type="image/png" sizes="16x16" href="../plugins/images/favicon.png">
    <title>Meliponas</title>
    <!-- Bootstrap Core CSS -->
    <link href="../bootstrap/dist/css/bootstrap.min.css" rel="stylesheet">
    <!-- Menu CSS -->
    <link href="../plugins/bower_components/sidebar-nav/dist/sidebar-nav.min.css" rel="stylesheet">
    <!-- Animation CSS -->
    <link href="../css/animate.css" rel="stylesheet">
    <!-- Custom CSS -->
    <link href="../css/style.css" rel="stylesheet">
    <!-- color CSS you can use different color css from css/colors folder -->
    <!-- We have chosen the skin-blue (blue.css) for this starter
          page. However, you can choose any other skin from folder css / colors .
-->
    <link href="../css/colors/blue-dark.css" id="theme" rel="stylesheet">

    <link rel="stylesheet" href="../botonFancy.css">
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
                <div class="top-left-part"><a class="logo" href="index.php"><b><img src="../plugins/images/pixeladmin-logo.png" alt="home" /></b>Meliponario</a></div>
                
                <ul class="nav navbar-top-links navbar-right pull-right">
                    <li>
                        <a class="profile-pic" href="#"> <b class="hidden-xs" > <?php echo $usuario; ?> </b> </a>
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
                            <h3 class="box-title">Inicio</h3> </div>


<!--
          <div class="row">
          <center>
            <div class="col-sm-3">
               <a href="Bitacora/agre_Bitacora.php"> <input type="button" name="" value="Agregar bitacora" class="button"> </a> <br>
            </div>
            <div class="col-sm-3">
               <a href="Bitacora/bitacoras.php"> <input type="button" name="" value="Historial bitacoras" class="button"> </a>
            </div>
        </center>
         </div>


         <br>
        <br>
        <div class="row">
        <center>
            <div class="col-sm-3">
               <a href="Colmena/colmenas.php"> <input type="button" name="" value="Colmenas" class="button"> </a> <br>
            </div>
            <div class="col-sm-3">
               <a href="Usuario/registro.php"> <input type="button" name="" value="Empleados" class="button"> </a>
            </div>
        </center>
            </div>

-->
 <h3 class="box-title">Colmenas</h3> </div>

                             <table class="table">
            <body>
                <tr>
                    <td>Numero de colmena</td>
                    <!--<td>Procedencia</td>
                    <td>Fecha</td>
                    <td>Descripcion</td>
                    <td>Fotografia</td>
                    <td colspan="4">Operaciones</td>-->

                </tr>

                <?php
                    include('conexion.php');

                    $query = "SELECT * FROM colmena";

                    $resultado = $con -> query($query);

                    while($row=$resultado->fetch_assoc())
                    {
                ?>
                        <tr>
                            <td><?php echo $row['idColmena']; ?></td>
                            <!--<td><?php echo $row['procedencia']; ?></td>
                            <td><?php echo $row['fecha']; ?></td>
                            <td><?php echo $row['descripcion']; ?></td>
                            <td><?php echo $row['foto']; ?></td>-->
                            <td><a href="Colmena/detalles.php?idColmena=<?php echo $row['idColmena']; ?>">Ver</a></td>
                            <td><a href="Colmena/QR/generarQR.php?idColmena=<?php echo $row['idColmena']; ?>">Generar</a></td>
                            <td><a href="Colmena/modificarColmena.php?idColmena=<?php echo $row['idColmena']; ?>">Modificar</a></td>
                            <td><a href="Bitacora/confirmarEliminar.php?idColmena=<?php echo $row['idColmena']; ?>">Eliminar</a></td>
                            <td><a href="Bitacora/agre_Bitacora.php?idColmena=<?php echo $row['idColmena']; ?>">Agregar bitacora</a></td>
                        
                        </tr>
                <?php
                    }
                ?>

            </body>
        </table>

        <a href="Colmena/registroColmena.php"> <input type="submit" class="btn btn-success" name="ejecutar" value="Agregar"/> </a>




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
    <script src="../plugins/bower_components/jquery/dist/jquery.min.js"></script>
    <!-- Bootstrap Core JavaScript -->
    <script src="../bootstrap/dist/js/bootstrap.min.js"></script>
    <!-- Menu Plugin JavaScript -->
    <script src="../plugins/bower_components/sidebar-nav/dist/sidebar-nav.min.js"></script>
    <!--slimscroll JavaScript -->
    <script src="../js/jquery.slimscroll.js"></script>
    <!--Wave Effects -->
    <script src="../js/waves.js"></script>
    <!-- Custom Theme JavaScript -->
    <script src="../js/custom.min.js"></script>
</body>

</html>
