<?php
 $urlWebservice = 'http://192.168.1.30:3000/getPlanesEstudio';
//Funcion get para cargar la tabla 
 function httpGet($pUrlWebservice)
{
    $ch = curl_init();  
    curl_setopt($ch,CURLOPT_URL,$pUrlWebservice);
    curl_setopt($ch,CURLOPT_RETURNTRANSFER,true); 
    $output=curl_exec($ch);
 
    curl_close($ch);
    return $output;
}


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
                                <table id="tabla" class="table table-striped table-bordered table-hover">
                                    <thead>
                                        <tr>
                                            <TH>Código</TH>
                                            <TH>Nombre</TH>
                                            
                                        </tr>
                                    </thead>';
									
         echo '                        <tbody>';

          for($index = 0;  $index < $jsonArraySize; $index++){
			  echo '<tr style="cursor: pointer" onclick="captureRegisterData(this)">';
			 
			  echo '<TD>';
			  echo $jsonArray[$index]->Codigo;
			  echo '</TD>';
			  
			  echo '<TD>';
			  echo $jsonArray[$index]->Nombre;
			  echo '</TD>';
			  
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

 $jsonRespuesta = httpGet($urlWebservice);
 showTablePlanesEstudio($jsonRespuesta);

?>