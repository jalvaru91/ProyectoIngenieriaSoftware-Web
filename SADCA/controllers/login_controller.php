<?php
  
 
  class LoginController {
	  
    public function isValidUserPassword($pUsername, $pPassword){
		$result = FALSE;
		if((strcmp($pUsername,"Jose") == 0) && (strcmp($pPassword,"pass")==0)){
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
	
	public function getUserRole($pUsername,$pPassword){
		$result = "admin";	
		return $result;
		
	}
	
  }
  
		
?>