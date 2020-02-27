<?php
    include("conexion.php");
    session_start();
    if(isset($_SESSION['username']))
    {
        $usuario = $_SESSION['username'];
        $tipo = mysqli_query($con, "SELECT tipo FROM usuario WHERE user = '$usuario'");
        $tip = mysqli_fetch_array($tipo);
    }else{
        header("location: ../../registrar.html");
    }
    
    if($tip['tipo'] != 'administrador') 
    {
        header("location: ../../registrar.html");
    }
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">
   
    <link rel="icon" type="image/png" sizes="16x16" href="../../plugins/images/favicon.png">
    <title>Meliponas</title>
    
    <link href="../../bootstrap/dist/css/bootstrap.min.css" rel="stylesheet">
  
    <link href="../../plugins/bower_components/sidebar-nav/dist/sidebar-nav.min.css" rel="stylesheet">
  
    <link href="../../css/animate.css" rel="stylesheet">
  
    <link href="../../css/style.css" rel="stylesheet">
   
    <link href="../../css/colors/blue-dark.css" id="theme" rel="stylesheet">
  
</head>

<body>
   
   
    <div id="wrapper">
       
        <nav class="navbar navbar-default navbar-static-top m-b-0">
            <div class="navbar-header"> <a class="navbar-toggle hidden-sm hidden-md hidden-lg " href="javascript:void(0)" data-toggle="collapse" data-target=".navbar-collapse"><i class="fa fa-bars"></i></a>
                <div class="top-left-part"><a class="logo" href="../index.php"><b><img src="../../plugins/images/pixeladmin-logo.png" alt="home" /></b>Meliponario</a></div>
                
                <ul class="nav navbar-top-links navbar-right pull-right">
                    <li>
                        <a class="profile-pic" href="#"> <b class="hidden-xs">Johan</b> </a>
                    </li>
                </ul>
            </div>
           
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
                            <h3 class="box-title">Modificar Colmenas</h3> </div>

                          <div class="porlets-content">
                <?php
                    include('conexion.php');
                    $idColmena = $_GET['idColmena'];
                    $query = "SELECT * FROM colmena WHERE idColmena=$idColmena";
                    $resultado = $con -> query($query);
                   $row=$resultado->fetch_assoc();    
                ?>

                <form action="modificarColmenaProceso.php" method="POST" enctype="multipart/form-data">
                    <input class="form-control" required type="hidden" name="idColmena" placeholder="Numero de Colmena" value="<?php echo $row['idColmena'] ?>"> <?php echo $row['idColmena'] ?> <br/>
                    <input class="form-control" required type="text" name="procedencia" placeholder="Procedencia" value="<?php echo $row['procedencia'] ?>"> <br/>
                    <input class="form-control" required type="date" name="fecha" placeholder="Fecha" value="<?php echo $row['fecha'] ?>"> <br/>
                    <input class="form-control" required type="text" name="descripcion" placeholder="Descripcion" value="<?php echo $row['descripcion'] ?>"> <br/>
                    <input class="form-control" required type="file" name="foto" placeholder="foto" value="<?php echo $row['foto'] ?>"> <br/>
                    <input class="btn btn-primary" type="submit" value="Aceptar"/>
                </form>
            </div>   
       
        

                            <!-- Fin del contenido -->
                    </div>
                </div>
            </div>
           
            <footer class="footer text-center">ITESCAM</footer>
        </div>
      
    </div>
  
    <script src="../../plugins/bower_components/jquery/dist/jquery.min.js"></script>
    
    <script src="../../bootstrap/dist/js/bootstrap.min.js"></script>
   
    <script src="../../plugins/bower_components/sidebar-nav/dist/sidebar-nav.min.js"></script>
    
    <script src="../../js/jquery.slimscroll.js"></script>
   
    <script src="../../js/waves.js"></script>
   
    <script src="../../js/custom.min.js"></script>
</body>

</html>
