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
    <title>SADCA ADMIN HOME</title>
    <!-- BOOTSTRAP CORE STYLE  -->
    <link href="assets/css/bootstrap.css" rel="stylesheet" />
    <!-- FONT AWESOME STYLE  -->
    <link href="assets/css/font-awesome.css" rel="stylesheet" />
    <!-- CUSTOM STYLE  -->
    <link href="assets/css/style.css" rel="stylesheet" />
    <!-- GOOGLE FONT -->
    <link href='http://fonts.googleapis.com/css?family=Open+Sans' rel='stylesheet' type='text/css' />

</head>
<body>
<!-- JS that calls logout.php to destroy the actual session-->
<script src="js/logout.js" type="text/javascript">
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
                <a  class="btn btn-info pull-right" onclick="logOut()"/>SALIR</a>
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
                            <li><a href="home_administrator.php" class="menu-top-active">Inicio</a></li>
                            <li><a href="form.html">Profesores</a></li>
                            <li><a href="tab.html">Franjas Horarias</a></li>
                            <li><a href="planes_de_estudio_administrator.php">Planes de Estudio</a></li>
                            <li><a href="blank.html" >Cursos</a></li>
							<li><a href="blank.html" >Sedes</a></li>
							<li><a href="blank.html" >Labores Administrativas</a></li>
							<li><a href="blank.html" >Labores de Investigación</a></li>
							<li><a href="labores_especiales_administrator.php" >Labores Especiales</a></li>
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
                <h4 class="header-line">Sistema Administrador de Datos de Carga Académica</h4>
                
                            </div>
							


        </div>

    </div>
     <!-- CONTENT-WRAPPER SECTION END-->
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
      <!-- CUSTOM SCRIPTS  -->
    <script src="assets/js/custom.js"></script>
</body>
</html>
