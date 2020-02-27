<?php 
    include ("conexion.php");
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

  $idBit = $_GET['idBitacora'];
  $query = "SELECT * FROM bitacora WHERE idbitacora=$idBit";
  $resul = $conexion -> query($query);
  $fila = $resul -> fetch_assoc();

  $idBitacora=$fila['idBitacora'];
  $idColmena=$fila['idColmena'];
  $idUsuario=$fila['idUsuario'];
  $colmena="";
  $cosecha=$fila['cosecha'];
  $revision=$fila['revision'];
  $lim_col=$fila['lim_col'];
  $lim_meli=$fila['lim_meli'];
  $a_inicio=$fila['a_inicio'];
  $a_termino=$fila['a_termino'];
  $a_cantidad=$fila['a_cantidad'];
  $a_numero=$fila['a_numero'];
  $dosis=$fila['dosis'];
  $inicio=$fila['inicio'];
  $termino=$fila['termino'];
  $desarrollo=$fila['desarrollo'];
  $miel=$fila['miel'];
  $cria=$fila['cria'];
  $abeja=$fila['abeja'];
  $cera=$fila['cera'];
  $fecha=$fila['fecha'];
  $ingredientes=$fila['ingredientes'];
  $observacion=$fila['observacion'];
  //$id=$cosecha=$revision=$lim_col=$lim_meli=$a_inicio=$a_termino=$a_cantidad=$a_numero=$dosis=$inicio=$termino=$desarrollo=$miel=$cria=$abeja=$fecha=$ingredientes=$observacion="";

  $ejecutarGuardar="";
  $ejecutarModificar=$ejecutarEliminar=$ejecutarCancelar="disabled";

  if(isset($_POST['ejecutar']))
  {
    $accion=$_POST['ejecutar'];
    $idBitacora=(isset($_POST['idBitacora']))?$_POST['idBitacora']:"";
    $idColmena=(isset($_POST['idColmena']))?$_POST['idColmena']:"";
    $idUsuario=(isset($_POST['idUsuario']))?$_POST['idUsuario']:"";
    $cosecha=(isset($_POST['cosecha']))?$_POST['cosecha']:"";
    $revision=(isset($_POST['revision']))?$_POST['revision']:"";
    $lim_col=(isset($_POST['lim_col']))?$_POST['lim_col']:"";
    $lim_meli=(isset($_POST['lim_meli']))?$_POST['lim_meli']:"";
    $a_inicio=(isset($_POST['a_inicio']))?$_POST['a_inicio']:"";
    $a_termino=(isset($_POST['a_termino']))?$_POST['a_termino']:"";
    $a_cantidad=(isset($_POST['a_cantidad']))?$_POST['a_cantidad']:"";
    $a_numero=(isset($_POST['a_numero']))?$_POST['a_numero']:0;
    $dosis=(isset($_POST['dosis']))?$_POST['dosis']:"";
    $inicio=(isset($_POST['inicio']))?$_POST['inicio']:"";
    $termino=(isset($_POST['termino']))?$_POST['termino']:"";
    $desarrollo=(isset($_POST['desarrollo']))?$_POST['desarrollo']:"";
    $miel=(isset($_POST['miel']))?$_POST['miel']:"";
    $cria=(isset($_POST['cria']))?$_POST['cria']:"";
    $abeja=(isset($_POST['abeja']))?$_POST['abeja']:"";
    $cera=(isset($_POST['cera']))?$_POST['cera']:"";
    $fecha=(isset($_POST['fecha']))?$_POST['fecha']:"";
    $ingredientes=(isset($_POST['ingredientes']))?$_POST['ingredientes']:"";
    $observacion=(isset($_POST['observacion']))?$_POST['observacion']:"";
    
    switch ($accion) 
    {
      case 'Guardar':
      
        $insSQL=$conexion->prepare("INSERT INTO bitacora(idBitacora,idColmena,idUsuario,cosecha,revision,lim_col,lim_meli,a_inicio,a_termino,a_cantidad,a_numero,dosis,inicio,termino,desarrollo,miel,cria,abeja,cera,fecha,ingredientes,observacion) VALUES(?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?);");
        
        $insSQL->bind_param('iissssssssisssssssssss',$idBitacora,$idColmena,$idUsuario,$cosecha,$revision,$lim_col,$lim_meli,$a_inicio,$a_termino,$a_cantidad,$a_numero,$dosis,$inicio,$termino,$desarrollo,$miel,$cria,$abeja,$cera,$fecha,$ingredientes,$observacion);
        $insSQL->execute();
        
        echo "<span class='alert alert-block alert-success'> Datos agregados al sistema </span>";
        break;

      case 'Modificar':

        $insSQL=$conexion->prepare("UPDATE bitacora SET cosecha=?,revision=?,lim_col=?,lim_meli=?,a_inicio=?,a_termino=?,a_cantidad=?,a_numero=?,dosis=?,inicio=?,termino=?,desarrollo=?,miel=?,cria=?,abeja=?,cera=?,fecha=?,ingredientes=?,observacion=? WHERE idBitacora=?");
        $insSQL->bind_param('sssssssisssssssssssi',$cosecha,$revision,$lim_col,$lim_meli,$a_inicio,$a_termino,$a_cantidad,$a_numero,$dosis,$inicio,$termino,$desarrollo,$miel,$cria,$abeja,$cera,$fecha,$ingredientes,$observacion,$idBitacora);
        $insSQL->execute();
        echo "<span class='alert alert-block alert-warning'> Datos modificados </span>";
        $ejecutarGuardar="disabled";
        $ejecutarModificar=$ejecutarEliminar=$ejecutarCancelar="";
        break;

        case 'Eliminar':
          $insSQL=$conexion->prepare("DELETE FROM bitacora WHERE idBitacora=?");
          $insSQL->bind_param('i',$idBitacora);
          $insSQL->execute();
          "<span class='alert alert-block alert-danger'> Datos eliminados </span>";
          $idColmena=$idUsuario=$cosecha=$revision=$lim_col=$lim_meli=$a_inicio=$a_termino=$a_cantidad=$a_numero=$dosis=$inicio=$termino=$desarrollo=$miel=$cria=$abeja=$cera=$fecha=$ingredientes=$observacion="";
          break;

        case 'Cancelar':
        $idColmena=$idUsuario=$cosecha=$revision=$lim_col=$lim_meli=$a_inicio=$a_termino=$a_cantidad=$a_numero=$dosis=$inicio=$termino=$desarrollo=$miel=$cria=$abeja=$cera=$fecha=$ingredientes=$observacion="";
        break;

        case 'Seleccionar':
          $ejecutarGuardar='disabled';
          $ejecutarModificar=$ejecutarEliminar=$ejecutarCancelar="";
          //echo $idColmena;
          break;

    }

  }


  $bitacora = "SELECT * FROM bitacora";
  $resultado = $conexion->query($bitacora);


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
                        <a class="profile-pic" href="#"> <b class="hidden-xs" ></b><?php echo $usuario; ?> </a>
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
                            <h3 class="box-title">Bitacoras</h3> </div>

                           <form action="" method="post">
          <?php 
          if(isset($_POST['ejecutar']))
          {
            $accion = $_POST['ejecutar'];
            if($accion=='Seleccionar' || $accion=='Modificar')
            { ?>
                

            <?php }
          }
          ?>

          <input required type="hidden" name="id" value="<?php echo $id; ?>"> 
          <input required type="hidden" name="idBitacora" value="<?php echo $idBitacora; ?>">  
          <input required type="hidden" name="idColmena" value="<?php echo $idColmena; ?>"> 
          <input required type="hidden" name="idUsuario" value="<?php echo $idUsuario; ?>">  
          Bitacora: <?php echo $idBitacora; ?> <br><br> 
          Colmena: <?php echo $idColmena; ?> <br><br>
          Usuario: <?php echo $idUsuario; ?> <br><br>
          Cosecha: <input required type="text" name="cosecha" value="<?php echo $cosecha; ?>"> <br><br> 
          Revision: <input required type="text" name="revision" value="<?php echo $revision; ?>"> <br><br>
          Limpieza colmena: <input required type="text" name="lim_col" value="<?php echo $lim_col; ?>"> <br><br>
          Limpieza meliponario: <input required type="text" name="lim_meli" value="<?php echo $lim_meli; ?>"> <br><br>
          Inicio alimentacion: <input required type="text" name="a_inicio" value="<?php echo $a_inicio; ?>"> <br><br> 
          Alimentacion termino: <input required type="text" name="a_termino" value="<?php echo $a_termino; ?>"> <br><br>
          Cantidad de alimento: <input required type="text" name="a_cantidad" value="<?php echo $a_cantidad; ?>"> <br><br>
          Numero de alimentacion: <input required type="text" name="a_numero" value="<?php echo $a_numero; ?>"> <br><br>
          Dosis: <input required type="text" name="dosis" value="<?php echo $dosis; ?>"> <br><br>
          Inicio: <input required type="text" name="inicio" value="<?php echo $inicio; ?>"> <br><br>
          Termino: <input required type="text" name="termino" value="<?php echo $termino; ?>"> <br><br>
          Desarrollo: <input required type="text" name="desarrollo" value="<?php echo $desarrollo; ?>"> <br><br>
          Miel: <input required type="text" name="miel" value="<?php echo $miel; ?>"> <br><br>
          Cria: <input required type="text" name="cria" value="<?php echo $cria; ?>"> <br><br>
          Abeja: <input required type="text" name="abeja" value="<?php echo $abeja; ?>"> <br><br>
          Cera: <input required type="text" name="cera" value="<?php echo $cera; ?>"> <br><br>
          Fecha: <input type="date" name="fecha" value="<?php echo $fecha; ?>"> <br><br>
          Ingredientes: <input required type="text" name="ingredientes" value="<?php echo $ingredientes; ?>"> <br><br>
          Observacion: <input required type="text" name="observacion" value="<?php echo $observacion; ?>"> <br><br>

          <button type="submit" class="btn btn-success" name="ejecutar" value="Guardar">Guardar</button>
          <button type="submit" class="btn btn-primary" name="ejecutar" value="Modificar">Modificar</button>
          <button type="submit" class="btn btn-warning" name="ejecutar" value="Cancelar">Cancelar</button>
          <button type="submit" class="btn btn-danger" name="ejecutar" value="Eliminar">Eliminar</button>
        </form>

        <br>
        <a href="bitacoras.php?idColmena=<?php echo $idColmena; ?> "><Button class="btn btn-block">Regresar</Button></a>


  
  

<!--

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
               <input type="submit" name="ejecutar" value="Seleccionar" class="btn btn-danger"/> 
               

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

-->
                            
       
        

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
