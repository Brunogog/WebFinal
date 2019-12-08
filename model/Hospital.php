<?php
include __DIR__.'/Conexao.php';

class Hospital extends Conexao {
    private $nome;
    private $endereco;

    function getNome() {
        return $this->nome;
    }
    function setNome($nome) {
        $this->nome = $nome;
    }
    function getEndereco() {
        return $this->endereco;
    }
    function setCnpj($endereco) {
        $this->endereco = $endereco;
    }

    public function insert($obj){
    	$sql = "INSERT INTO hospital(nome,endereco) VALUES (:nome,:endereco)";
    	$consulta = Conexao::prepare($sql);
        $consulta->bindValue('nome', $obj->nome);
        $consulta->bindValue('cnpj' , $obj->endereco);
    	return $consulta->execute();
	}

	public function update($obj,$id = null){
		$sql = "UPDATE hospital SET nome = :nome,endereco = :endereco WHERE id = :id ";
		$consulta = Conexao::prepare($sql);
		$consulta->bindValue('nome', $obj->nome);
		$consulta->bindValue('endereco' , $obj->endereco);
		$consulta->bindValue('id', $id);
		return $consulta->execute();
	}

	public function delete($obj,$id = null){
		$sql =  "DELETE FROM hospital WHERE id = :id";
		$consulta = Conexao::prepare($sql);
		$consulta->bindValue('id',$id);
		$consulta->execute();
	}

	public function find($id = null){
        $sql =  "SELECT * FROM hospital WHERE id = :id";
        $consulta = Conexao::prepare($sql);
        $consulta->bindValue('id',$id);
        $consulta->execute();
	}

	public function findAll(){
		$sql = "SELECT * FROM hospital";
		$consulta = Conexao::prepare($sql);
		$consulta->execute();
		return $consulta->fetchAll();
	}

}

?>