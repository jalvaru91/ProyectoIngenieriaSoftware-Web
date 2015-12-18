<?php
  
       function isValidUserPassword($pUsername, $pPassword){
		$result = FALSE;
		if((strcmp($pUsername,"test@tec.ac.cr") == 0) && (strcmp($pPassword,"pass")==0)){
		$result = TRUE;
		session_start();
		$_SESSION["username"] = $pUsername;
		$_SESSION["password"] = $pPassword;
		$_SESSION["rol"] = "Admin";
		header("Location:/proyectoingenieriasoftware-web/SADCA/home_administrator.php");
		}
		else{	
			header("Location:/proyectoingenieriasoftware-web/SADCA/login.php");
		}
	}
  
    if (isset($_GET['controller']) and isset($_GET['action']) and isset($_GET['username']) and isset($_GET['password'])) {
    $controllername = $_GET['controller'];
    $action     = $_GET['action'];
	$username = $_GET['username'];
	$password = $_GET['password'];
	isValidUserPassword($username,$password);
  } else {
	header("Location:/proyectoingenieriasoftware-web/SADCA/login.php");
  }
  

		
?>