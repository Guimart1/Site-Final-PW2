<?php
 require_once '../../dao/AvaliacaoBoloDao.php';
 require_once '../../model/AvaliacaoBolo.php';
 require_once '../../model/Mensagem.php';

 $avaliacao = new AvaliacaoBolo();
 $msg = new Mensagem();

  //var_dump($_POST); 


 switch ($_POST["acao"]) {
  case 'DELETE':
   try {
        $comentario = AvaliacaoBoloDao::delete($_POST['idDeletar']);
        header("Location: index.php");
    } catch (Exception $e) {
        echo 'Exceção capturada: ',  $e->getMessage(), "\n";
    }
    break;
}
?>