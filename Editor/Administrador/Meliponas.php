<!DOCTYPE html PUBLIC "">
<html xmlns="">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Meliponas</title>
<META NAME="ROBOTS" CONTENT="NOINDEX, NOFOLLOW">

<link href="css/font-awesome.css" rel="stylesheet" type="text/css" />
<link href="css/bootstrap.min.css" rel="stylesheet" type="text/css" />
<link href="css/animate.css" rel="stylesheet" type="text/css" />
<link href="css/admin.css" rel="stylesheet" type="text/css" />
<link href="css/jquerysctipttop.css" rel="stylesheet" type="text/css">
<link href="plugins/kalendar/kalendar.css" rel="stylesheet">
<link rel="stylesheet" href="plugins/scroll/nanoscroller.css">
<link href="plugins/morris/morris.css" rel="stylesheet" />
</head>

<body class="light_theme  fixed_header atm-spmenu-push left_nav_fixed" style="background-color:#EEE7E5;">
  <body>
      <div class="brand">
          <!--\\\\\\\ brand Start \\\\\\-->
          <div class="logo" style="display:block"><span class="theme_color"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">Meli</font></font></span><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">ponas</font></font></div>
          <div class="small_logo" style="display:none"><img src="images/s-logo.png" width="50" height="47" alt="s-logo"> <img src="images/r-logo.png" width="122" height="20" alt="r-logo"></div>
        </div>
        <!--\\\\\\\ brand end \\\\\\-->
  </body>
  <div class="wrapper">
    <!--\\\\\\\ wrapper Start \\\\\\-->
    <div class="header_bar">
      <!--\\\\\\\ header Start \\\\\\-->

      <div class="header_top_bar">
        <!--\\\\\\\ header top bar start \\\\\\-->
        <div class="col-sm-4">
        <div class="pull-left page_title theme_color">
        <h6>Bitacora</h6>
        </div>
        </div>

       <a href="javascript:void(0);" class="add_user" data-toggle="modal" data-target="#myModal">   </a>
        <div class="top_right_bar">
          <div class="top_right">
            <div class="top_right_menu">
            </div>
          </div>
          <div class="user_admin dropdown"> <a href="javascript:void(0);" data-toggle="dropdown"><span class="user_adminname"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">Opciones</font></font></span> <b class="caret"></b> </a>
            <ul class="dropdown-menu">
              <div class="top_pointer"></div>
              <li> <a href="logout.php"><i class="fa fa-power-off"></i><font style="vertical-align: inherit;"><font style="vertical-align: inherit;"> Cerrar sesión</font></font></a> </li>
            </ul>
          </div>

          <a href="javascript:;" class="toggle-menu menu-right push-body jPushMenuBtn rightbar-switch"></a>

        </div>
      </div>
      <!--\\\\\\\ header top bar end \\\\\\-->
    </div>
     <?php include ("menu.php") ?>
    <!--\\\\\\\ header end \\\\\\-->
    <div class="inner">
      <!--\\\\\\\ inner start \\\\\\-->
      <!--\\\\\\\left_nav end \\\\\\-->
      <div class="contentpanel">
        <!--\\\\\\\ contentpanel start\\\\\\-->

        <div class="container clear_both padding_fix">
          <!--\\\\\\\ container  start \\\\\\-->



          <!--Contenido-->
          <br>
          <br>

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
</table>
<br><br> <center>Descripción de la colmena</center>
<br>
<table class="table table-bordered">
<tr>
<th>MELIPONICULTOR:</th>
<th>FECHA: </th>
</tr>
</table>

<table class="table table-bordered">

		<tr>
			<th width="150" height="30"> Manejo realizado</th>
		</tr>
		<tr>
			<th>Cosecha (volumen)</th>
			<th>Revisión</th>
			<th>Limpieza colmenas</th>
			<th>Limpieza meliponario</th>
		</tr>
		<tr>
			<th><input type="text" name=""></th>
			<th><input type="text" name=""></th>
			<th><input type="text" name=""></th>
			<th><input type="text" name=""></th>
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
      <th><input type="text" name=""></th>
      <th><input type="text" name=""></th>
      <th><input type="text" name=""></th>
      <th><input type="text" name=""></th>
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
      <th><input type="text" name=""></th>
      <th><input type="text" name=""></th>
      <th><input type="text" name=""></th>
    </tr>
</table>
<br><br>
Desarrollo:
<br><textarea class="form-control" name="texto" rows="4" cols="40" placeholder="Escribir el desarrollo" ></textarea>
<br>
<table class="table table-bordered">
	<tr>
		<th>Reforzamiento</th>
	</tr>
	<tr>
		<th>Miel</th>
		<th>Cria</th>
		<th>Abejas</th>
		<th>Fecha</th>
	</tr>
  <tr>
      <th><input type="text" name=""></th>
      <th><input type="text" name=""></th>
      <th><input type="text" name=""></th>
      <th><input type="text" name=""></th>
    </tr>
</table>

Ingredientes de alimento:
<br><textarea class="form-control" name="texto" rows="4" cols="40" placeholder="Escribir ingredientes de alimento"></textarea>
<br>Observaciones:
<br><textarea class="form-control" name="texto" rows="4" cols="40" placeholder="Escribir las observaciones"></textarea>
<br>
<br>





          <div class="col-sm-8">
<button type="button" class="btn btn-success">Guardar</button>



          </div>










        </div>
        <!--\\\\\\\ container  end \\\\\\-->
      </div>
      <!--\\\\\\\ content panel end \\\\\\-->
  </div>
  <!--\\\\\\\ wrapper end\\\\\\-->


  <script src="js/jquery-2.1.0.js"></script>
  <script src="js/bootstrap.min.js"></script>
  <script src="js/common-script.js"></script>
  <script src="js/jquery.slimscroll.min.js"></script>
  <script src="js/jquery.sparkline.js"></script>
  <script src="js/sparkline-chart.js"></script>
  <script src="js/graph.js"></script>
  <script src="js/edit-graph.js"></script>
  <script src="plugins/kalendar/kalendar.js" type="text/javascript"></script>
  <script src="plugins/kalendar/edit-kalendar.js" type="text/javascript"></script>

  <script src="plugins/sparkline/jquery.sparkline.js" type="text/javascript"></script>
  <script src="plugins/sparkline/jquery.customSelect.min.js"></script>
  <script src="plugins/sparkline/sparkline-chart.js"></script>
  <script src="plugins/sparkline/easy-pie-chart.js"></script>
  <script src="plugins/morris/morris.min.js" type="text/javascript"></script>
  <script src="plugins/morris/raphael-min.js" type="text/javascript"></script>
  <script src="plugins/morris/morris-script.js"></script>





  <script src="plugins/demo-slider/demo-slider.js"></script>
  <script src="plugins/knob/jquery.knob.min.js"></script>




  <script src="js/jPushMenu.js"></script>
  <script src="js/side-chats.js"></script>
  <script src="js/jquery.slimscroll.min.js"></script>
  <script src="plugins/scroll/jquery.nanoscroller.js"></script>








  </body>
</html>
