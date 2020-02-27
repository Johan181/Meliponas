<?php include('conexion.php')?>
<?php
    session_start();
    $usuario = $_SESSION['username'];

    $tipo = mysqli_query($con, "SELECT tipo FROM usuario WHERE user = '$usuario'");
    $tip = mysqli_fetch_array($tipo);

    if (!isset($usuario) || $tip['tipo'] != 'administrador') 
    {
      header("location: ../index.php");
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
    <title>Detalles de la colmena</title>
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
                        <a class="profile-pic" href="#"> <b class="hidden-xs"> <?php echo $usuario; ?></b> </a>
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
                            <h3 class="box-title">Detalles de la colmena</h3> </div>

                            <div class="row">

    <div class="col-sm-2">
    <img src="../Bitacora/itescam.jpg" width="120px" height="130px">
    </div>
    <div class="panel default blue_title h2">
    <div class="col-sm-8">
    <center><h1><br> INSTITUTO TECNOLOGICO SUPERIOR DE CALKINÍ EN EL ESTADO DE CAMPECHE </h1></center>
    <center><h2> CONTROL MELIPONARIO </h2></center>
    <br><br>  <center><h2> BITACORA DE MANEJO DEL MELIPONARIO </h2></center>
    </div>
    </div>
    <div class="col-sm-2">
      <img src="../Bitacora/melipona.png" width="120px" height="130px">
    </div>
    </div>
  </div>

<?php

  $idColmena = $_GET['idColmena'];
  $query = "SELECT * FROM colmena WHERE idColmena=$idColmena";
  $resultado = $con -> query($query);
  $fila = $resultado -> fetch_assoc();

?>


<br><br><br> RESPONSABLE:
<br>
<div class="scrollmenu" id="scrollmenu">
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
<th><?php echo '<img src="../../image'.$fila['foto'].'" width="100 height="100"/>'; ?>  </th>
<th> <a href="mostrar_foto.php?idColmena=<?php echo $fila['idColmena']; ?>"> <input type="button" name="Ver" value="Ver imagen" class="btn btn-success"></a> </th>
</tr>
</table>
</div>
<a href="../Bitacora/agre_Bitacora.php?idColmena=<?php echo $fila['idColmena']; ?>"><input type="button" name="Seleccionar" value="Crear Bitacora" class="btn btn-success"></a>
<br>
<br>
<?php
  $bitacora = "SELECT * FROM `bitacora` WHERE idColmena='$idColmena'";
  $resultado = $con->query($bitacora);
?>

<div class="scrollmenu" id="scrollmenu">
<table border="1" class="table table-bordered table-hover">
        <tr>
          <td></td>
          <td>idBitacora</td>
          <td>Numero de Colmena</td>
          <td>Cosecha</td>
          <td>Revision</td>
          <td>Limpieza colmena</td>
          <td>Limpieza meliponario</td>
          <td>Inicio alimentacion</td>
          <td>Alimentacion termino</td>
          <td>Cantidad de alimento</td>
          <td>Numero de alimentacion</td>
          <td>Dosis</td>
          <td>Inicio</td>
          <td>Termino</td>
          <td>Desarrollo</td>
          <td>Miel</td>
          <td>Cria</td>
          <td>Abeja</td>
          <td>Cera</td>
          <td>Fecha</td>
          <td>Ingredientes</td>
          <td>Observacion</td>
        </tr>

        <?php

        while ($fila=$resultado -> fetch_assoc()) 
        {?>

          <tr>
            <td>
              <form accion="" method="post">
                <input type="hidden" name="idBitacora" value="<?php echo $fila['idBitacora'];?>">
                <input type="hidden" name="idColmena" value="<?php echo $fila['idColmena'];?>">
                <input type="hidden" name="cosecha" value="<?php echo $fila['cosecha'];?>">
                <input type="hidden" name="revision" value="<?php echo $fila['revision'];?>">
                <input type="hidden" name="lim_col" value="<?php echo $fila['lim_col'];?>">
                <input type="hidden" name="lim_meli" value="<?php echo $fila['lim_meli'];?>">
                <input type="hidden" name="a_inicio" value="<?php echo $fila['a_inicio'];?>">
                <input type="hidden" name="a_termino" value="<?php echo $fila['a_termino'];?>">
                <input type="hidden" name="a_cantidad" value="<?php echo $fila['a_cantidad'];?>">
                <input type="hidden" name="a_numero" value="<?php echo $fila['a_numero'];?>">
                <input type="hidden" name="dosis" value="<?php echo $fila['dosis'];?>">
                <input type="hidden" name="inicio" value="<?php echo $fila['inicio'];?>">
                <input type="hidden" name="termino" value="<?php echo $fila['termino'];?>">
                <input type="hidden" name="desarrollo" value="<?php echo $fila['desarrollo'];?>">
                <input type="hidden" name="miel" value="<?php echo $fila['miel'];?>">
                <input type="hidden" name="cria" value="<?php echo $fila['cria'];?>">
                <input type="hidden" name="abeja" value="<?php echo $fila['abeja'];?>">
                <input type="hidden" name="cera" value="<?php echo $fila['cera'];?>">
                <input type="hidden" name="fecha" value="<?php echo $fila['fecha'];?>">
                <input type="hidden" name="ingredientes" value="<?php echo $fila['ingredientes'];?>">
                <input type="hidden" name="observacion" value="<?php echo $fila['observacion'];?>"> 
                <a href="../Bitacora/agrega.php?idBitacora=<?php echo $fila['idBitacora']; ?>"><input type="button" name="Seleccionar" value="Seleccionar" class="btn btn-danger"></a>


              </form>
            </td>

            
            <td><?php echo $fila['idBitacora']; ?></td>
            <td><?php echo $fila['idColmena']; ?></td>
            <td><?php echo $fila['cosecha']; ?></td>
            <td><?php echo $fila['revision']; ?></td>
            <td><?php echo $fila['lim_col']; ?></td>
            <td><?php echo $fila['lim_meli']; ?></td>
            <td><?php echo $fila['a_inicio']; ?></td>
            <td><?php echo $fila['a_termino']; ?></td>
            <td><?php echo $fila['a_cantidad']; ?></td>
            <td><?php echo $fila['a_numero']; ?></td>
            <td><?php echo $fila['dosis']; ?></td>
            <td><?php echo $fila['inicio']; ?></td>
            <td><?php echo $fila['termino']; ?></td>
            <td><?php echo $fila['desarrollo']; ?></td>
            <td><?php echo $fila['miel']; ?></td>
            <td><?php echo $fila['cria']; ?></td>
            <td><?php echo $fila['abeja']; ?></td>
            <td><?php echo $fila['cera']; ?></td>
            <td><?php echo $fila['fecha']; ?></td>
            <td><?php echo $fila['ingredientes']; ?></td>
            <td><?php echo $fila['observacion']; ?></td>


          </tr>
        

        <?php } ?>
</table>
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