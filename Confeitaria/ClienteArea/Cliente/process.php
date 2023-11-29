<?php
 require_once '../../dao/ClienteDao.php';
 require_once '../../model/Cliente.php';
 require_once '../../model/Mensagem.php';

 $cliente = new Cliente();
 $msg = new Mensagem();

  //var_dump($_POST); 


 switch ($_POST["acao"]) {
  case 'DELETE':
   try {
        $ClienteDao = ClienteDao::delete($_POST['idDeletarCliente']);
        header("Location: index.php");
    } catch (Exception $e) {
      echo 'Exceção capturada: ',  $e->getMessage(), "\n";
    }
    break;

  case 'SALVAR':
    //pode validar as informações
    $cliente->setNomeCliente($_POST['nomeCliente']);
    $cliente->setSobrenomeCliente($_POST['sobrenomeCliente']);
    $cliente->setEmailCliente($_POST['emailCliente']);
    $cliente->setSenhaCliente($_POST['senhaCliente']);
    $cliente->setFotoCliente($cliente->salvarImagem($_POST['nomeFotoCliente'])); 
    $cliente->setTokenCliente($cliente->generateToken());
    try {
      $ClienteDao = ClienteDao::insert($Cliente);
      $msg->setMensagem("Usuário Salvo com sucesso.", "bg-success");
      header("Location: index.php");
    } catch (Exception $e) {
     // echo 'Exceção capturada: ',  $e->getMessage(), "\n";
      $msg->setMensagem("Verifique os dados digitados.", "bg-danger");
      header("Location: register.php");
    } 
    break;
  case 'ATUALIZAR':
        //pode validar as informações
        $cliente->setNomeCliente($_POST['nomeCliente']);
        $cliente->setSobrenomeCliente($_POST['sobrenomeCliente']);
        $cliente->setEmailCliente($_POST['emailCliente']);
        $cliente->setSenhaCliente($_POST['senhaCliente']);
        $cliente->setFotoCliente($cliente->salvarImagem($_POST['nomeFotoCliente'])); 
        $cliente->setTokenCliente($cliente->generateToken());
        try {
          $ClienteDao = ClienteDao::update($_POST["idUser"], $cliente);
          $msg->setMensagem("Usuário Atualizado com sucesso.", "bg-success");
          header("Location: index.php");
        } catch (Exception $e) {
         echo 'Exceção capturada: ',  $e->getMessage(), "\n";

        } 
    break;

  case 'SELECTID':

    try {
        $ClienteDao = ClienteDao::selectById($_POST['id']);
        // Configura as opções do contexto da solicitação
        include('register.php');
    } catch (Exception $e) {
        echo 'Exceção capturada: ',  $e->getMessage(), "\n";
    } 

  
    break;
  }
?>