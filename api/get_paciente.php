<?php
	include __DIR__.'/../control/PacienteControl.php';
	$pacienteControl = new PacienteControl();

	header('Content-type: application/json');

	if ($pacienteControl->findAll()) {
		http_response_code(200);
		echo json_encode($pacienteControl->findAll());
	}
	else {
		http_response_code(400);
		echo json_encode(array("mensagem" => "Não encontrado"));
	}
?>