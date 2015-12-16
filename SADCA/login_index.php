<?php
  
  require("controllers/login_controller.php");
  if (isset($_GET['controller']) and isset($_GET['action']) and isset($_GET['username']) and isset($_GET['password'])) {
    $controllername = $_GET['controller'];
    $action     = $_GET['action'];
	$username = $_GET['username'];
	$password = $_GET['password'];
	$controller = new LoginController();
	$controller->{$action}($username,$password);
  } else {
	header("Location:/proyectoingenieriasoftware-web/SADCA/login.php");
  }
  
?>