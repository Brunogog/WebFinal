<?php
header("Access-Control-Allow-Origin: *");

define('PASTAPROJETO', 'SuSaude');

function checkRequest() {
	$method = $_SERVER['REQUEST_METHOD'];
	switch ($method) {
	  case 'PUT':
	  	$answer = "update";
	    break;
	  case 'POST':	  
	  	$answer = "post";
	    break;
	  case 'GET':
	  	$answer = "get";
	    break;
	  case 'DELETE':
	  	$answer = "delete";
	    break;	
	  default:
	    handle_error($method);  
	    break;
	}
	return $answer;
}

$answer = checkRequest();

$request = $_SERVER['REQUEST_URI']; 
http://localhost:8080/SuSaude/

switch ($request) {
    case '/':
      require __DIR__ . '/view/login.html';
		break;
    case '/'.PASTAPROJETO:
      require __DIR__ . '/view/index.html';
		break;
    case '/'.PASTAPROJETO.'/' :
				require __DIR__ . '/view/index.html';
        break;
				case '/'.PASTAPROJETO.'/consulta_paciente' :
					require __DIR__ . '/view/consultaPaciente.html';
				break;
				case '/'.PASTAPROJETO.'/consulta_hospital' :
					require __DIR__ . '/view/consultaHospital.html';
				break;
				case '/'.PASTAPROJETO.'/cadastro_paciente' :
					require __DIR__ . '/view/cadastroPaciente.html';
				break;
				case '/'.PASTAPROJETO.'/cadastro_hospital' :
					require __DIR__ . '/view/cadastroHospital.html';
				break;
				case '/'.PASTAPROJETO.'/alterar_paciente' :
					require __DIR__ . '/view/alteraPaciente.html';
				break;
				case '/'.PASTAPROJETO.'/alterar_hospital' :
					require __DIR__ . '/view/alteraHospital.html';
				break;
    case '' :
        require __DIR__ . '/api/api.php';
        break;
    case '/'.PASTAPROJETO.'/paciente' :
        require __DIR__ . '/api/'.$answer.'_paciente.php';
        break;
    case '/'.PASTAPROJETO.'/hospital' :
        require __DIR__ . '/api/'.$answer.'_hospital.php';
				break;
    default:
        require __DIR__ . '/api/404.php';
        break;
}