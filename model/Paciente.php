<?php
include __DIR__.'/Conexao.php';

class Paciente extends Conexao {
	private $nome;
    private $cpf;

    public function getNome() {
        return $this->nome;
    }   
    public function setNome($nome) {
        $this->nome = $nome;
        return $this;
    }
    public function getCpf() {
        return $this->cpf;
    }   
    public function setCpf($cpf) {
        $this->cpf = $cpf;
        return $this;
    }

    public function insert($obj) {
    	$sql = "INSERT INTO paciente(nome,cpf) VALUES (:nome,:cpf)";
    	$consulta = Conexao::prepare($sql);
        $consulta->bindValue('nome',  $obj->nome);
        $consulta->bindValue('cpf' , $obj->cpf);
        return $consulta->execute();
	}

	public function update($obj,$id = null) {
		$sql = "UPDATE paciente SET nome = :nome, cpf = :cpf";
		$consulta = Conexao::prepare($sql);
		$consulta->bindValue('nome', $obj->nome);
        $consulta->bindValue('cpf' , $obj->cpf);
		$consulta->bindValue('id', $id);
		return $consulta->execute();
	}

	public function delete($obj,$id = null) {
		$sql =  "DELETE FROM paciente WHERE id = :id";
		$consulta = Conexao::prepare($sql);
		$consulta->bindValue('id',$id);
		$consulta->execute();
	}

	public function find($id = null) {
        $sql =  "SELECT * FROM paciente WHERE id = :id";
        $consulta = Conexao::prepare($sql);
        $consulta->bindValue('id',$id);
        $consulta->execute();
	}

	public function findAll() {
		$sql = "SELECT * FROM paciente";
		$consulta = Conexao::prepare($sql);
		$consulta->execute();
		return $consulta->fetchAll();
	}
}

?>