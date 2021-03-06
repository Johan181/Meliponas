<?php
    session_start();
    $usuario = $_SESSION['username'];

    if (!isset($usuario)) 
    {
        header("location: ../index.php");
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
                        <a class="profile-pic" href="#"> <b class="hidden-xs"> <?php echo $usuario; ?> </b> </a>
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
                            <h3 class="content-header">Agregar Colmena</h3></div>

                            
        <div class="col-md-6">
          <div class="block-web">
            <div class="header">
              
            </div>
            <div class="porlets-content">

                <form action="guardar_registro.php" method="POST" enctype="multipart/form-data">
                    <input class="form-control" required type="text" name="colmena" placeholder="Numero de colmena" value=""> <br/>
                    <input class="form-control" required type="text" name="procedencia" placeholder="Procedencia" value=""> <br/>
                    <input class="form-control" required type="date" name="fecha" placeholder="Fecha" value=""> <br/>
                    <input class="form-control" required type="text" name="descripcion" placeholder="Descripcion" value=""> <br/>
                    <input class="form-control" required type="file" name="foto" placeholder="foto" value=""> <br/>
                    <input class="btn btn-primary" type="submit" value="Aceptar"/>
                </form>
            </div>
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
