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
    <title>Meliponas</title>
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
<style>
    .scrollmenu{
        
        overflow:auto;
        white-space: nowrap;

        margin: 2rem auto;
        border: 1px solid #aaa;
        
        background: #f1f2f3;
        overflow:auto;
        box-sizing: border-box;
        padding:0 1rem;

        background: auto;
        
    }

    .scrollmenu::-webkit-scrollbar {
    -webkit-appearance: none;
}

.scrollmenu::-webkit-scrollbar:vertical {
    width:10px;
}

.scrollmenu::-webkit-scrollbar-button:increment,.scrollmenu::-webkit-scrollbar-button {
    display: none;
} 

.scrollmenu::-webkit-scrollbar:horizontal {
    height: 10px;
}

.scrollmenu::-webkit-scrollbar-thumb {
    background-color: #797979;
    border-radius: 20px;
    border: 2px solid #f1f2f3;
}

.scrollmenu::-webkit-scrollbar-track {
    border-radius: 10px;  
}

    

    </style>
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
                        <a class="profile-pic" href="#"> <b class="hidden-xs"> <?php echo $usuario; ?> </b> </a>
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
                            <h3 class="box-title">Tabla</h3> </div>

                            <body>
                        <div class="scrollmenu" id="scrollmenu">
                        <table class="table">
                            <body>
                                <tr>
                                    <td>ID</td>
                                    <td>Nombre</td>
                                    <td>Apellido Paterno</td>
                                    <td>Apellido Materno</td>
                                    <td>Tipo</td>
                                    <td>Usuario</td>
                                    <td>Password</td>
                                    <td colspan="2">Operaciones</td>

                                </tr>

                                <?php
                                    include('conexion.php');

                                    $query = "SELECT * FROM usuario";

                                    $resultado = $con -> query($query);

                                    while($row=$resultado->fetch_assoc())
                                    {
                                ?>
                                        <tr>
                                            <td><?php echo $row['idUsuario']; ?></td>
                                            <td><?php echo $row['nombre']; ?></td>
                                            <td><?php echo $row['apellidoP']; ?></td>
                                            <td><?php echo $row['apellidoM']; ?></td>
                                            <td><?php echo $row['tipo']; ?></td>
                                            <td><?php echo $row['user']; ?></td>
                                            <td> ******* </td>
                                            <td><a href="modificar.php?idUsuario=<?php echo $row['idUsuario']; ?>">Modificar</a></td>
                                            <td><a href="confirmarEliminar.php?idUsuario=<?php echo $row['idUsuario']; ?>">Eliminar</a></td>
                                        </tr>
                                <?php 
                                    }
                                ?>

                            </body>
                        </table>
                    </div>
                          <a href="registro.php"> <input type="submit" class="btn btn-success" name="ejecutar" value="Agregar"/> </a>
                </body>





                            
       
        

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
