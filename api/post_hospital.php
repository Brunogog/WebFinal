<?php
include __DIR__.'/../control/HospitalControl.php';
 
	$data = file_get_contents('php://input');
	$obj =  json_decode($data);

	//echo $obj->titulo; /*VER OBJETO*/

	if(!empty($data)){	
		try {
			$hospitalControl = new HospitalControl();
			$hospitalControl->insert($obj);
			http_response_code(200);
			echo json_encode($obj);
		}
		catch (PDOException $e) {
			http_response_code(400);
			echo json_encode(array("mensagem" => "Parâmetros Inválidos"));
		}
	}
	else {
		http_response_code(400);
		echo json_encode(array("mensagem" => "Não foram enviados parâmetros"));
	}

?>