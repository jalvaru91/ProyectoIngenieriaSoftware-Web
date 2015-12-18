function captureRegisterData(objeto){
	//se capturan los datos del registro de planes de estudio al cual se le dio click (codigo original del plan - nombre)
	var codigoOriginal = objeto.cells[0].childNodes[0].nodeValue;
	var nombre = objeto.cells[1].childNodes[0].nodeValue;

	sessionStorage.setItem("codigoOriginal", codigoOriginal);
	sessionStorage.setItem("codigo",codigoOriginal);
	sessionStorage.setItem("nombre",nombre);
	mostrarModal();
}


function mostrarModal(){
	$('#myModal').modal('show');
	document.getElementById('codigo').defaultValue = sessionStorage.getItem("codigoOriginal");
	document.getElementById('nombre').defaultValue = sessionStorage.getItem("nombre");
}

function mostrarModalNuevoPlan(){
	$('#myModal2').modal('show');
	
}

function enviarDatos(){
	var nuevoCodigo = document.getElementById('codigo').value;
	var nuevoNombre = document.getElementById('nombre').value;
    
	if((nuevoCodigo != "")&&(nuevoNombre != "")){
		var body = {codigo_original:sessionStorage.getItem("codigoOriginal"),
		            codigo:nuevoCodigo,
				    nombre:nuevoNombre,
		            email_usuario:sessionStorage.getItem("username")}; 
        var jsonString = JSON.stringify(body);					
	    var urlrequest = "controllers/planes_de_estudio_administrator_controller.php/?"+"request=PUT"+"&"+"action=putPlanDeEstudio"+"&"+"planDeEstudio="+jsonString;
		sessionStorage.removeItem("codigoOriginal");
		sessionStorage.removeItem("codigo");
		sessionStorage.removeItem("nombre");
		window.location = urlrequest;        
	}
	else{
		
	}
	
}

function enviarNuevosDatos(){
	var v_codigo = document.getElementById('myModal2_codigo').value;
	var v_nombre = document.getElementById('myModal2_nombre').value;
	
	if((v_codigo != "") && (v_nombre != "")){
	 var body = {
		  codigo:v_codigo,
		  nombre:v_nombre,
	      email_usuario:sessionStorage.getItem("username")
	 };
     var jsonString = JSON.stringify(body); 	 
	 var urlrequest = "controllers/planes_de_estudio_administrator_controller.php/?"+"request=POST"+"&"+"action=postPlanDeEstudio"+"&"+"planDeEstudio="+jsonString;
     window.location = urlrequest;
	 }
	else{
		
	}
	
}