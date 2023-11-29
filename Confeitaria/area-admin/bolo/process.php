<?php
 require_once '../../dao/BoloDao.php';
 require_once '../../model/Bolo.php';
 require_once '../../model/Mensagem.php';

 $bolo = new Bolo();
 $msg = new Mensagem();

  //var_dump($_POST); 


 switch ($_POST["acao"]) {
  case 'DELETE':
   try {
        $BoloDao = BoloDao::delete($_POST['idDeletar']);
        header("Location: index.php");
    } catch (Exception $e) {
      echo 'Exceção capturada: ',  $e->getMessage(), "\n";
    }
    break;

  case 'SALVAR':
    //pode validar as informações
    $bolo->setNome($_POST['nomeBolo']);
    $bolo->setSabor($_POST['saborBolo']);
    $bolo->setCobertura($_POST['coberturaBolo']);
    $bolo->setDecoracao($_POST['decoracaoBolo']);
    $bolo->setDesc($_POST['descBolo']);
    $bolo->setPeso($_POST['pesoBolo']);
    $bolo->setEspecificacao($_POST['especificacaoBolo']);
    $bolo->setValor($_POST['valorBolo']);
    $bolo->setFotoBolo($bolo->salvarImagem($_POST['fotoBolo'])); 
    try {
      $BoloDao = BoloDao::insert($bolo);
      $msg->setMensagem("Bolo Cadastrado com sucesso.", "bg-success");
      header("Location: index.php");
    } catch (Exception $e) {
     // echo 'Exceção capturada: ',  $e->getMessage(), "\n";
      $msg->setMensagem("Verifique os dados Digitados.", "bg-danger");
      header("Location: register.php");
    } 
    break;
  case 'ATUALIZAR':
           //pode validar as informações
    $bolo->setNome($_POST['nomeBolo']);
    $bolo->setSabor($_POST['saborBolo']);
    $bolo->setCobertura($_POST['coberturaBolo']);
    $bolo->setDecoracao($_POST['decoracaoBolo']);
    $bolo->setDesc($_POST['descBolo']);
    $bolo->setPeso($_POST['pesoBolo']);
    $bolo->setEspecificacao($_POST['especificacaoBolo']);
    $bolo->setValor($_POST['valorBolo']);
    $bolo->setFotoBolo($bolo->salvarImagem($_POST['fotoBolo'])); 
        try {
          $BoloDao = BoloDao::update($_POST["idProduto"], $bolo);
          $msg->setMensagem("Bolo Atualizado com sucesso.", "bg-success");
          header("Location: index.php");
        } catch (Exception $e) {
         echo 'Verifique as informações digitadas. ',  $e->getMessage(), "\n";

        } 
    break;

  case 'SELECTID':

    try {
        $BoloDao = BoloDao::selectById($_POST['id']);
        // Configura as opções do contexto da solicitação
        include('register.php');
    } catch (Exception $e) {
        echo 'Exceção capturada: ',  $e->getMessage(), "\n";
    } 

  
    break;


  }

?>