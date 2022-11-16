<?php
require_once ('../../infra/conn.php');
class Cliente {
    private $idCliente;
    private $nome;
    private $senha;

    private $connection;

    public function __construct() {
        $this->connection = new Connection();
    }

    //setters
    public function setNome($nome) {
        $this->nome = $nome;
    }     

    public function setSenha($senha) {
        $this->senha = $senha;
    }

    //getters
    public function getIdCliente() {
        return $this->idCliente;
    }

    public function getNome() {
        return $this->nome;
    }   
    
    private function getSenha() {
        return $this->senha;
    }

    /*public function cadastraCliente($nome, $senha) {
        $this->nome = $nome;
        $this->senha = $senha;

        $sql = "INSERT INTO cliente (nome, senha) VALUES 
        ('$nome','$senha')";
        return mysqli_query($this->connection->getConnection(), $sql);
    }
    */
}
?>