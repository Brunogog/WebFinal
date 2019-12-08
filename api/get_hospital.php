<?php
include __DIR__.'/../control/HospitalControl.php';
  $hospitalControl = new HospitalControl();

  header('Content-Type: application/json');

  echo json_encode($hospitalControl->findAll());

  // foreach($hospitalControl->findAll() as $valor){
  // 	echo json_encode($valor);
  // }
?>