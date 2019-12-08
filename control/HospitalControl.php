<?php
include __DIR__.'/../model/Hospital.php';

class HospitalControl {
	function insert($obj){
		$hospital = new hospital();
		return $hospital->insert($obj);
	}

	function update($obj,$id){
		$hospital = new hospital();
		return $hospital->update($obj,$id);
	}

	function delete($obj,$id){
		$hospital = new hospital();
		return $hospital->delete($obj,$id);
	}

	function find($id = null){
		$hospital = new hospital();
		return $hospital->find($id);
	}

	function findAll(){
		$hospital = new hospital();
		return $hospital->findAll();
	}
}

?>