<?php
include __DIR__.'/../model/Paciente.php';

class PacienteControl {
	function insert($obj){
		$paciente = new paciente();
		return $paciente->insert($obj);
	}

	function update($obj,$id){
		$paciente = new paciente();
		return $paciente->update($obj,$id);
	}

	function delete($obj,$id){
		$paciente = new paciente();
		return $paciente->delete($obj,$id);
	}

	function find($id = null){
		$paciente = new paciente();
		return $paciente->find($id);
	}

	function findAll(){
		$paciente = new paciente();
		return $paciente->findAll();
	}
}

?>