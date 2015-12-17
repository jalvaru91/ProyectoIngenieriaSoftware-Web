<?php

function showTablePlanesEstudio($pJson){
	$jsonPHP = json_decode($pJson);
	
	if($jsonPHP->Error){
		echo '
           <div class="row">
		   
                <div class="col-md-4 col-sm-4">
                    <div class="panel panel-default">
                        <div class="panel-heading">
							Mensaje de error
                        </div>
                        <div class="panel-body">';
						$errorMessage = $jsonPHP->Message;
                        echo   '<p>';
						 echo $errorMessage;
						echo   '</p>';
                        
		echo  '				
						</div>

                    </div>
                </div>
              
            </div>';
	}
	else{
		$jsonArray = $jsonPHP->PlanesEstudio;
		$jsonArraySize = count($jsonArray);
		
		echo '
                    <div class="panel panel-default">
                        <div class="panel-heading">
                            
                        </div>
                        <div class="panel-body">
                            <div class="table-responsive">
                                <table class="table table-striped table-bordered table-hover">
                                    <thead>
                                        <tr>
                                            <th>Código</th>
                                            <th>Nombre</th>
                                            
                                        </tr>
                                    </thead>';
									
         echo '                        <tbody>';

          for($index = 0;  $index < $jsonArraySize; $index++){
			  echo '<tr>';
			  echo '<sec>';
			  echo 'secreto';
			  echo '<sec>';
			  echo '<td>';
			  echo $jsonArray[$index]->Codigo;
			  echo '</td>';
			  
			  echo '<td>';
			  echo $jsonArray[$index]->Nombre;
			  echo '</td>';
			  
			  echo '</tr>';
		  }			
										
        echo '                       </tbody>';
		
		
		echo '
                                </table>
                            </div>
                        </div>
                    </div>
                                
                      
                    </div>
                </div>
            </div>
                <!-- /. ROW  -->';
				
	}
	
}

$jsonprueba1 = '{ "Error": false, "PlanesEstudio":[{"Codigo":"410","Nombre":"Bachillerato en Ingeniería en Computación"}, {"Codigo":"MC","Nombre":"Maestría en ciencias de la Computación"}]}';
$jsonprueba2 = '{"Error": true, "Message":"soy un mensaje de error"}';

showTablePlanesEstudio($jsonprueba1);

?>