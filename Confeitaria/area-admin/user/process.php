<?php
 require_once '../../dao/AdminDao.php';
 require_once '../../model/Admin.php';
 require_once '../../model/Mensagem.php';

 $admin = new Admin();
 $msg = new Mensagem();

  //var_dump($_POST); 


 switch ($_POST["acao"]) {
  case 'DELETE':
   try {
        $AdminDao = AdminDao::delete($_POST['idDeletar']);
        header("Location: index.php");
    } catch (Exception $e) {
      echo 'Exceção capturada: ',  $e->getMessage(), "\n";
    }
    break;

  case 'SALVAR':
    //pode validar as informações
    $admin->setNome($_POST['nome']);
    $admin->setSobrenome($_POST['sobrenome']);
    $admin->setCpf($_POST['cpf']);
    $admin->setNasc($_POST['nasc']);
    $admin->setEmail($_POST['email']);
    $admin->setSenha($_POST['senha']);
    $admin->setFoto($admin->salvarImagem($_POST['nomeFoto'])); 
    $admin->setToken($admin->generateToken());
    try {
      $AdminDao = AdminDao::insert($admin);
      $msg->setMensagem("Usuário Salvo com sucesso.", "bg-success");
      header("Location: index.php");
    } catch (Exception $e) {
     // echo 'Exceção capturada: ',  $e->getMessage(), "\n";
      $msg->setMensagem("Verifique os dados Digitados.", "bg-danger");
      header("Location: register.php");
    } 
    break;
  case 'ATUALIZAR':
        //pode validar as informações
        $admin->setNome($_POST['nome']);
        $admin->setSobrenome($_POST['sobrenome']);
        $admin->setCpf($_POST['cpf']);
        $admin->setNasc($_POST['nasc']);
        $admin->setEmail($_POST['email']);
        $admin->setSenha($_POST['senha']);
        $admin->setFoto($admin->salvarImagem($_POST['nomeFoto'])); 
        $admin->setToken($admin->generateToken());
        try {
          $AdminDao = AdminDao::update($_POST["idUser"], $admin);
          $msg->setMensagem("Usuário Atualizado com sucesso.", "bg-success");
          header("Location: index.php");
        } catch (Exception $e) {
         echo 'Exceção capturada: ',  $e->getMessage(), "\n";

        } 
    break;

  case 'SELECTID':

    try {
        $AdminDao = AdminDao::selectById($_POST['id']);
        // Configura as opções do contexto da solicitação
        include('register.php');
    } catch (Exception $e) {
        echo 'Exceção capturada: ',  $e->getMessage(), "\n";
    } 

  
    break;


  }




 

?>