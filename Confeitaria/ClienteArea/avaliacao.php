<?php
 require_once '../dao/AvaliacaoBoloDao.php';
 require_once '../model/AvaliacaoBolo.php';
 require_once '../model/Mensagem.php';
 $avaliacao = new AvaliacaoBolo();
 $msg = new Mensagem();
  session_start();
  $authClient = $_SESSION["authClient"];
  $idCliente = $authClient['id'];
  $avaliacao->setTituloDepoimento($_POST['tituloDepoimento']);
  $avaliacao->setTextoDepoimento($_POST['textoDepoimento']);
  $avaliacao->setIdCliente($idCliente);
  $avaliacao->setIdBolo($_POST['idBolo']);
  
  $enviar = AvaliacaoBoloDao::insert($avaliacao);
  header("Location: produtos.php");
?>