<?php
include_once __DIR__. './../Model/Conexao.php';
include_once __DIR__. './../Model/Usuario.php';
include_once __DIR__. './../Model/UsuarioDAO.php';

$daoUsuario=new UsuarioDAO();
$daoUsuario->insere(new Usuario("Felipe","felipe@gmail.com","felipe"));
echo var_dump($daoUsuario->busca_usr_email("felipe@gmail.com"));

echo "<pre>";
print_r (var_dump($daoUsuario->lista_todos()));
echo "</pre>";

echo "teste autenticacao";
echo var_dump($daoUsuario->autenticar("felipe@gmail.com","felipe"));
echo var_dump($daoUsuario->autenticar("felipe@gmail.com","felipes"));
?>