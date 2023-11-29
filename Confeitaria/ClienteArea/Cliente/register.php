<?php 
  require_once("../../componentes/modal.php");
  require_once '../../dao/ClienteDao.php';
  if(!empty($_POST)){
    $id_Cliente = $ClienteDao['idCliente'];
    $nome_Cliente =  $ClienteDao['nomeCliente'];
    $sobrenome_Cliente = $ClienteDao['sobrenomeCliente'];
    $email_Cliente = $ClienteDao['emailCliente'];
    $password_Cliente = $ClienteDao['senhaCliente'];
    $imagem_Cliente = $ClienteDao['fotoCliente'];
    }else{
      $nome_Cliente = '';
      $sobrenome_Cliente = '';
      $cpf_Cliente = '';
      $nasc_Cliente= '';
      $email_Cliente = '';
      $password_Cliente = '';
      $imagem_Cliente = '';
      $id_Cliente = '';
    }


?>
<!DOCTYPE html>
<html lang="pt-br">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>FilmeOn - Adm</title>
  <link rel="short icon" href="./../../img/site/logo.png" />
  <!-- Bootstrap -->
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">
  <!-- icon -->
  <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.3.1/css/all.css"> <!-- CSS Projeto -->
  <link rel="stylesheet" href="css/style.css">
</head>

<body style="justify-content: center; align-items: center; height: 100vh ">

  <script type="text/javascript" src="http://code.jquery.com/jquery-3.0.0.min.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/js/bootstrap.bundle.min.js"
    integrity="sha384-ENjdO4Dr2bkBIFxQpeoTz1HIcje39Wm4jDKdf19U8gI4ddQ3GYNS7NTKfAdVQSZe" crossorigin="anonymous" defer>
  </script>
  <!-- Para usar Mascara  -->
  <script type="text/javascript" src="./../../js/jquery.mask.min.js"></script>
  <script type="text/javascript" src="./../../js/personalizar.js"></script>
  <script type="text/javascript" src="./../../js/modal.js"></script>

</body>

</html>