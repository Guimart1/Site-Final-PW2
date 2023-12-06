<?php
require_once '../../dao/ClienteDao.php';

$cliente = ClienteDao::checkCredentials($_POST['emailCliente'], $_POST['senhaCliente']);


if($cliente){
    $authClient = [
        'id' => $cliente['idCliente'],
        'nome' => $cliente['nomeCliente'],
        'email' => $cliente['emailCliente'],
        'img' => $cliente['fotoCliente'],
        'token' => $cliente['tokenCliente']
    ];
        session_start();
        $_SESSION["authClient"] = $authClient;
        header("Location: ../index.php");
}else{
        header("Location: login.php?status=erro1");  
}



?>