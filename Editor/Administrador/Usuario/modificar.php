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
                        <a class="profile-pic" href="#"> <b class="hidden-xs"></b><?php echo $usuario; ?></a>
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
                            <h3 class="box-title">Modificar</h3> </div>

                            
                <?php
                    include('conexion.php');
                    $idUsuario = $_GET['idUsuario'];
                    $query = "SELECT * FROM usuario WHERE idUsuario=$idUsuario";
                    $resultado = $con -> query($query);
                   $row=$resultado->fetch_assoc();
                    
                ?>
                        <form action="modificarRegistroProceso.php?idUsuario=<?php echo $row['idUsuario']; ?>" method="POST" >
                            <input class="form-control" required type="text" name="nombre" placeholder="Nombre" value="<?php echo $row['nombre'] ?>"> <br/>
                            <input class="form-control" required type="text" name="apellidoP" placeholder="Apellido Paterno" value="<?php echo $row['apellidoP'] ?>"> <br/>
                            <input class="form-control" required type="text" name="apellidoM" placeholder="Apellido Materno" value="<?php echo $row['apellidoM'] ?>"> <br/>
                            <div class="form-group">
                                <label class="col-sm-3 control-label">Tipo de Usuario</label>
                                <div class="col-sm-9">
                                    <select required name="tipo" class="form-control">
                                    <optgroup label="Seleccione el tipo de usuario">
                                    <option selected=""></option>
                                    <option value="administrador"> Administrador </option>
                                    <option value="editor"> Editor </option>
                                    </select>
                                </div><!--/col-sm-9-->
                            </div><!--/form-group--><br/><br/>
                            <input class="form-control" required type="text" name="user" placeholder="usuario" value="<?php echo $row['user'] ?>"> <br/>
                            <input class="form-control" required type="password" name="pass" placeholder="password" value="<?php echo $row['pass'] ?>"> <br/>
                            <input class="btn btn-primary" type="submit" value="Aceptar"/>
                        </form>







       
        

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
