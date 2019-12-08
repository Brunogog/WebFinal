<?php
include __DIR__.'/../control/HospitalControl.php';
 
$data = file_get_contents('php://input');
$obj =  json_decode($data);
//echo $obj->titulo;

$id = $obj->id;

if(!empty($data)){	
 $hospitalControl = new hospitalControl();
 $hospitalControl->delete($obj,$id);
 header('Location:listar.php');
}

?>