<?php
  
 
  class LoginController {
	  
    public function isValidUserPassword($pUsername, $pPassword){
		$result = FALSE;
		if((strcmp($pUsername,"Jose") == 0) && (strcmp($pPassword,"pass")==0)){
		$result = TRUE;
		return $result;
		}
		return $result;
	}
	
	public function getUserRole($pUsername,$pPassword){
		$result = "admin";
		
		
		return $result;
		
	}
	

  }
  
		echo "estoy validando";
		require('controllers/login_controller.php');
	    $username = $_GET["username"];
		$password = $_GET["password"];
        $controller = new LoginController();  
		$isValidUsernameAndPassword = $controller->isValidUserPassword($username,$password);
		
		if($isValidUsernameAndPassword == TRUE){
			$userRol = $controller->getUserRole($username,$password);
			if(strcmp($userRol,"admin")==0){
				echo "estoy cambiando";
				header("Location: holamundo.php");
				}
			
			}
		else{
			   echo"<script>alert('La contraseña del usuario no es correcta.'); </script>";
			}
?>