<?php
require_once '../../dao/AdminDao.php';

$users = AdminDao::checkCredentials($_POST['email'], $_POST['senha']);


if($users){
    $auth  = [
        'id' => $users['idAdm'],
        'nome' => $users['nomeAdm'],
        'email' => $users['emailAdm'],
        'img' => $users['fotoAdm'],
        'token' => $users['tokenAdm']
    ];
        session_start();
        $_SESSION["auth"] = $auth;
        header("Location: ../home");
}else{
        header("Location: login.php?status=erro1");  
}



?>