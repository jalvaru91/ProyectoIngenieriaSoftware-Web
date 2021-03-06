<!DOCTYPE html>
<!-- Php scritp that check if the user has permission of use the system-->
<?php include("security/administrator_session_security.php"); ?>
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1" />
    <meta name="description" content="" />
    <meta name="author" content="" />
    <!--[if IE]>
        <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
        <![endif]-->
    <title>FREE RESPONSIVE HORIZONTAL ADMIN</title>
    <!-- BOOTSTRAP CORE STYLE  -->
    <link href="assets/css/bootstrap.css" rel="stylesheet" />
    <!-- FONT AWESOME STYLE  -->
    <link href="assets/css/font-awesome.css" rel="stylesheet" />
    <!-- DATATABLE STYLE  -->
    <link href="assets/js/dataTables/dataTables.bootstrap.css" rel="stylesheet" />
    <!-- CUSTOM STYLE  -->
    <link href="assets/css/style.css" rel="stylesheet" />
    <!-- GOOGLE FONT -->
    <link href='http://fonts.googleapis.com/css?family=Open+Sans' rel='stylesheet' type='text/css' />

</head>
<body>
<!-- JS that calls logout.php to destroy the actual session-->
<script src="js/logout.js" type="text/javascript">
</script>
<!-- JS que maneja los eventos de tabla-->
<script src="js/planes_de_estudio_administrator_functions.js" type="text/javascript">
</script>  


    <div class="navbar navbar-inverse set-radius-zero" >
        <div class="container">
            <div class="navbar-header">
                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
                <a class="navbar-brand" href="index.html">

                    <img src="assets/img/logo.png" />
                </a>

            </div>

            <div class="right-div">
                <a href="#" class="btn btn-info pull-right" onclick="logOut()">SALIR</a>
            </div>
        </div>
    </div>
    <!-- LOGO HEADER END-->
    <section class="menu-section">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <div class="navbar-collapse collapse ">
                        <ul id="menu-top" class="nav navbar-nav navbar-right">
                           <li><a href="home_administrator.php">Inicio</a></li>
                            <li><a href="form.html">Profesores</a></li>
                            <li><a href="tab.html">Franjas Horarias</a></li>
                            <li><a href="planes_de_estudio_administrator.php" >Planes de Estudio</a></li>
                            <li><a href="blank.html" >Cursos</a></li>
							<li><a href="sedes_administrator.php" class="menu-top-active">Sedes</a></li>
							<li><a href="blank.html" >Labores Administrativas</a></li>
							<li><a href="blank.html" >Labores de Investigación</a></li>
							<li><a href="labores_especiales_administrator.php">Labores Especiales</a></li>
							<li><a href="blank.html" >Trabajos Finales de Graduación</a></li>
							<li><a href="blank.html" >Jornadas Laborales</a></li>
							<li><a href="blank.html" >Oferta Académica</a></li>

                        </ul>
                    </div>
                </div>

            </div>
        </div>
    </section>
     <!-- MENU SECTION END-->
    <div class="content-wrapper">
         <div class="container">
        <div class="row pad-botm">
            <div class="col-md-12">
                <h4 class="header-line">Planes de Estudio</h4>
                
                            </div>

        </div>
            <div class="row">
                <div class="col-md-12">
                          
                                 
                <!--Table from the webservice -->
                <?php include ("controllers/planes_de_estudio_administrator_tableloader.php")?> 
                 <center>  
                 <button type="button" class="btn btn-default" data-dismiss="modal" onclick="mostrarModalNuevoPlan()">Nuevo</button>
                 </center>
                </div>
				
				
			</div>
			
			
			
        </div>
		
		
		
		
    </div>
     <!-- CONTENT-WRAPPER SECTION END-->
	 
<!-- Modal para modificar un plan de estudio-->
<div id="myModal" class="modal fade" role="dialog">
  <div class="modal-dialog">

    <!-- Modal content-->
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal">&times;</button>
        <h4 class="modal-title">Modificar Plan de Estudio</h4>
      </div>
      <div class="modal-body">
        <!-- -->
		<div class="row">
           
               <div class="panel panel-info">

                        <div class="panel-body">
                            <form name="formularioPlanesDeEstudio" role="form">
                                        <div class="form-group">
                                            <label>Código</label>
                                            <input id="codigo" class="form-control" type="text" />
                                            <p class="help-block">Introducir código de plan de estudio.</p>
                                        </div>
                                 <div class="form-group">
                                            <label>Nombre</label>
                                            <input id="nombre" class="form-control" type="text" />
                                     <p class="help-block">Introducir nombre de plan de estudio. </p>
                                        </div>
                                            
                                  
                                         

                                    </form>
                            </div>
                        </div>                            
		<!-- -->

      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-default" data-dismiss="modal">Cerrar</button>
		<button type="button" class="btn btn-default" onclick="enviarDatos()">Guardar</button>
      </div>
	  
	  
    </div>

  </div>
</div>
</div>
<!-- Fin Modal modificar plan de estudio-->


<!-- Modal para nuevo un plan de estudio-->
<div id="myModal2" class="modal fade" role="dialog">
  <div class="modal-dialog">

    <!-- Modal content-->
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal">&times;</button>
        <h4 class="modal-title">Nuevo Plan de Estudio</h4>
      </div>
      <div class="modal-body">
        <!-- -->
		<div class="row">
           
               <div class="panel panel-info">

                        <div class="panel-body">
                            <form name="formularioPlanesDeEstudio" role="form">
                                        <div class="form-group">
                                            <label>Código</label>
                                            <input id="myModal2_codigo" class="form-control" type="text" />
                                            <p class="help-block">Introducir código de plan de estudio.</p>
                                        </div>
                                 <div class="form-group">
                                            <label>Nombre</label>
                                            <input id="myModal2_nombre" class="form-control" type="text" />
                                     <p class="help-block">Introducir nombre de plan de estudio. </p>
                                        </div>
                                            
                                  
                                         

                                    </form>
                            </div>
                        </div>                            
		<!-- -->

      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-default" data-dismiss="modal">Cerrar</button>
		<button type="button" class="btn btn-default" onclick="enviarNuevosDatos()">Nuevo</button>
      </div>
	  
	  
    </div>

  </div>
</div>
</div>
<!-- Fin Modal nuevo plan de estudio-->

					 
    <section class="footer-section">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                   &copy; 2014 Yourdomain.com |<a href="http://www.binarytheme.com/" target="_blank"  > Designed by : binarytheme.com</a> 
                </div>

            </div>
        </div>
    </section>
      <!-- FOOTER SECTION END-->
    <!-- JAVASCRIPT FILES PLACED AT THE BOTTOM TO REDUCE THE LOADING TIME  -->
    <!-- CORE JQUERY  -->
    <script src="assets/js/jquery-1.10.2.js"></script>
    <!-- BOOTSTRAP SCRIPTS  -->
    <script src="assets/js/bootstrap.js"></script>
    <!-- DATATABLE SCRIPTS  -->
    <script src="assets/js/dataTables/jquery.dataTables.js"></script>
    <script src="assets/js/dataTables/dataTables.bootstrap.js"></script>
      <!-- CUSTOM SCRIPTS  -->
    <script src="assets/js/custom.js"></script>
</body>
</html>
