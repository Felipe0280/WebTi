<?php

include_once __DIR__.'./Model/Conexao.php';
include_once __DIR__.'./Model/Usuario.php';
include_once __DIR__.'./Model/UsuarioDAO.php';
include_once __DIR__.'./Model/UsuarioDAO.php';
include_once __DIR__.'./Controller/AutenticacaoController.php';
include_once __DIR__.'./Controller/CadastroController.php';
session_start();


if(isset($_GET['rota'])){
    $rota = $_GET['rota'];
}else{
    $rota="login";
}

switch($rota){
    case 'login':

        if(isset($_SESSION['usuario'])){
            header("Location:home.php");
        }
        require "login.php";
        break;

    case 'autenticacao':
        $aut = new AutenticacaoController();
        $aut->login();
        break;
    
    case 'cadastro':
        $cadastro = new CadastroController();
        $cadastro ->cadastro();
            header("Location:CadastroUsuario.php");
            break;

    case 'home':
        header("Location:home.php");
        break;

    case 'logout':
            session_destroy();

            header("Location:rota.php");
            break;


    default:
    echo "rota desconhecida";
}

?>