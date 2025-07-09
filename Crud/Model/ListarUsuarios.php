<?php

include_once __DIR__.'./Conexao.php';
include_once __DIR__.'./Usuario.php';
include_once __DIR__.'./UsuarioDAO.php';
include_once __DIR__.'./../Controller/AutenticacaoController.php';

//session_start();
if(!isset($_SESSION['usuario'])){
    header("Location:rota.php");

}

?>

<table>
    <tr>
        <th> ID </th>
        <th> NOME </th>
        <th> EMAIL </th>
    </tr>


<?php

$dao = new UsuarioDAO();
$lista = $dao->lista_todos();
?>
<?php foreach($lista as $usuario): ?>
    
    <tr>
        <td><?= $usuario->getId() ?? '' ?></td>
        <td><?= $usuario->getNome() ?? '' ?></td>
        <td><?= $usuario->getEmail() ?? '' ?></td>
    </tr>

<?php endforeach; ?>


</table>