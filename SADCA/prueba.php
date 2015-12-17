<?php

function showTablePlanesEstudio($pJson){
	$jsonPHP = json_decode($pJson);
	
	if($jsonPHP->Error){
		echo '
           <div class="row">
                <div class="col-md-4 col-sm-4">
                    <div class="panel panel-default">
                        <div class="panel-heading">
                            Default Panel
                        </div>
                        <div class="panel-body">
                            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Vestibulum tincidunt est vitae ultrices accumsan. Aliquam ornare lacus adipiscing, posuere lectus et, fringilla augue.</p>
                        </div>
                        <div class="panel-footer">
                            Panel Footer
                        </div>
                    </div>
                </div>
                
            </div>
			
		

		              ';
	}
	else{
		
	}
	
}

$jsonprueba = '{ "Error": true, "PlanesEstudio":[{"Codigo":"410","Nombre":"Bachillerato en Ingeniería en Computación"}, {"Codigo":"MC","Nombre":"Maestría en ciencias de la Computación"}]}';
//$jsonPHP = json_decode($jsonprueba);

//echo "$jsonPHP->Error";

//$jsonArray = $jsonPHP->PlanesEstudio;
//$array = json_decode($jsonArray);

//echo $jsonArray[1]->Codigo;
showTablePlanesEstudio($jsonprueba);

?>