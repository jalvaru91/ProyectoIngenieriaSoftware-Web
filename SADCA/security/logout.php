<?php
// Se reanuda la sesion
session_start(); 
 // se destruye la sesion
session_destroy(); 
//Redireccionamos a index.php (al inicio de sesión) 
header("Location:/proyectoingenieriasoftware-web/SADCA/login.php");
?>