<?php 


 function putPlanDeEstudios(){
	 $planDeEstudioJson = $_GET['planDeEstudio'];
		  		  
$jsonPHP = json_decode($planDeEstudioJson);
$codigo_original = $jsonPHP->codigo_original;
$codigo = $jsonPHP->codigo;
$nombre = $jsonPHP->nombre;
$email_usuario = $jsonPHP->email_usuario;

$data = array
(
   "codigo_original" => $codigo_original,
   "codigo" => $codigo,
   "nombre" => $nombre,
   "email_usuario" => $email_usuario
);
	
        $ch = curl_init('http://192.168.1.30:3000/updatePlanEstudio');
        curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
		curl_setopt($ch, CURLOPT_HTTPHEADER, array ('Content-Type: application/json') );
        curl_setopt($ch, CURLOPT_CUSTOMREQUEST, "PUT");
        curl_setopt($ch, CURLOPT_POSTFIELDS,$planDeEstudioJson);

        $response = curl_exec($ch);
        $webservice_answer = json_decode($response);
        if($webservice_answer->Error){
			
		}else{
			header("Location:/proyectoingenieriasoftware-web/SADCA/planes_de_estudio_administrator.php");
		}
	 
 }
 
 if ( isset($_GET['request']) && isset($_GET['action']) && isset($_GET['planDeEstudio'])){
     if((strcmp($_GET['request'],'PUT')==0)&&(strcmp($_GET['action'],'putPlanDeEstudios')==0)){
	 putPlanDeEstudios();
	 }	
 }


 
 else{
	 header("Location:/proyectoingenieriasoftware-web/SADCA/planes_de_estudio_administrator.php");
 }
	 
 ?>