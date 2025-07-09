<?php

class Usuario{

    public $id;
    public $nome;
    public $email;
    public $senha;

    public function __construct($nome, $email, $senha){
        $this->nome=$nome;
        $this->email=$email;
        $this->senha=$senha;
    }

    public function setNome($lnome){
        $this->nome=$lnome;
    }
    public function getId() { return $this->id; }
    public function getNome() { return $this->nome; }
    public function getEmail() { return $this->email; }
}

?>