<?php

include_once __DIR__.'./../Model/Conexao.php';
include_once __DIR__.'./../Model/Usuario.php';
include_once __DIR__.'./../Model/UsuarioDAO.php';

 class CadastroController{

    public function cadastro(){

    $dao = new UsuarioDAO();

    if(isset($_POST['nome']) && isset($_POST['email']) && isset($_POST['senha'])){
        $nome = $_POST['nome'];
        $email = $_POST['email'];
        $senha = $_POST['senha'];
        $usuario = new Usuario($nome, $email, $senha);
        $usuario = $dao->inserir($usuario);
        header("Location:rota.php?rota=home"); 
    }else{
       header("Location:rota.php"); 
    }
       
    
        
    }
}

?>