<?php 
  require_once("../../Components/modal.php");
  require_once '../../dao/BoloDao.php';
  if(!empty($_POST)){
    $id_Bolo = $BoloDao['idBolo'];
    $nome_Bolo =  $BoloDao['nomeBolo'];
    $sabor_Bolo = $BoloDao['saborBolo'];
    $cobertura_Bolo = $BoloDao['coberturaBolo'];
    $decoracao_Bolo= $BoloDao['decoracaoBolo'];
    $desc_Bolo = $BoloDao['descBolo'];
    $peso_Bolo = $BoloDao['pesoBolo'];
    $especificacao_Bolo = $BoloDao['especificacaoBolo'];
    $valor_Bolo = $BoloDao['valorBolo'];
    $imagem_Bolo = $BoloDao['fotoBolo'];
    }else{
      $nome_Bolo = '';
      $sabor_Bolo = '';
      $cobertura_Bolo = '';
      $decoracao_Bolo= '';
      $desc_Bolo = '';
      $peso_Bolo = '';
      $especificacao_Bolo = '';
      $valor_Bolo = '';
      $imagem_Bolo = '';
      $id_Bolo = '';
    }


?>
<!DOCTYPE html>
<html lang="pt-br">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Bolletos - Registrar bolos</title>
  <link rel="short icon" href="./../../img/site/logo.png" />
  <!-- Bootstrap -->
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">
  <!-- icon -->
  <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.3.1/css/all.css"> <!-- CSS Projeto -->
  <link rel="stylesheet" href="css/style.css">
</head>

<body style="justify-content: center; align-items: center; height: 100vh ">
  <?php 
      include('./../../Components/header-adm.php');
  ?>
  <div class="container-fluid" style="height: 90vh">
    <div class="row h-100">
      <?php 
      include('./../../Components/menu-adm.php');
      ?>
      <div class="col-md-10  p-4 borber">
        <div class="card">
          <form method="post" action="process.php" enctype="multipart/form-data" class="needs-validation" novalidate>
            <div class="card-header">
              <strong>INFORMAÇÕES DO BOLO</strong>
              <input type="hidden" name="idProduto" id="idProduto" placeholder="id" value="<?=$id_Bolo?>">
              <input type="hidden" name="fotoBolo" id="fotoBolo" placeholder="foto bolo" value="<?=$imagem_Bolo?>">
              <input type="hidden" value="<?=$id_Bolo?'ATUALIZAR':'SALVAR'?>" name="acao" >

            </div>
            <div class="card-body row" style="align-items: center; justify-content: center;">
              <div class="col-md-2   text-center" >
                <div class="bg-white rounded border" >
                  <img id="preview" src="../../img/bolos/<?=$imagem_Bolo!="" ? $imagem_Bolo : 'vetorBolo.jpg';?>" alt="..."
                    class="rounded  w-100  "  style="height:200px; object-fit: cover; border:4px solid #ccc" >
                </div>
              </div>
              <div class=" col-md-10">
                <div class="row">
                  <div class="col-md-3 mb-3">
                    <label for="nomeBolo" class="col-form-label">Nome:</label>
                    <input type="text" class="form-control" name="nomeBolo" maxlength="45" id="nomeBolo" value="<?=$nome_Bolo?>"
                      required>
                    <div class="invalid-feedback">
                      Nome Inválido
                    </div>
                  </div>
                  <div class="col-md-6 mb-3">
                    <label for="saborBolo" class="col-form-label">Sabor:</label>
                    <input type="text" class="form-control" name="saborBolo" maxlength="30" id="saborBolo"
                      value="<?=$sabor_Bolo?>" required>
                    <div class="invalid-feedback">
                      Sabor Inválido
                    </div>
                  </div>
                  <div class="col-md-3 mb-3">
                    <label for="coberturaBolo" class="col-form-label">Cobertura:</label>
                    <input type="text" class="form-control" name="coberturaBolo" maxlength="30" id="coberturaBolo"
                     value="<?=$cobertura_Bolo?>" required>
                    <div class="invalid-feedback">
                      Cobertura Inválida
                    </div>
                  </div>
                </div>
                <div class="row">
                  <div class="col-md-3">
                    <label for="decoracaoBolo" class="col-form-label">Decoração:</label>
                    <input type="text" class="form-control" name="decoracaoBolo" maxlength="50" id="decoracaoBolo" value="<?=$decoracao_Bolo?>" required>
                    <div class="invalid-feedback">
                      Decoração inválida
                    </div>
                  </div>
                  <div class="col-md-6">
                    <label for="descBolo" class="col-form-label">Descrição:</label>
                    <input type="text" class="form-control" name="descBolo" maxlength="250" value="<?=$desc_Bolo?>" required>
                    <div class="invalid-feedback">
                      Descrição Inválida
                    </div>
                  </div>
                  <div class="col-md-3">
                    <label for="pesoBolo" class="col-form-label">Peso:</label>
                    <input type="number" class="form-control" name="pesoBolo" max="100" value="<?=$peso_Bolo?>"
                      id="pesoBolo" required>
                    <div class="invalid-feedback">
                      Peso Inválido
                    </div>
                  </div>
                  <div class="col-md-6">
                    <label for="especificacaoBolo" class="col-form-label">Especificações:</label>
                    <input type="text" class="form-control" name="especificacaoBolo" maxlength="100" value="<?=$especificacao_Bolo?>" required>
                    <div class="invalid-feedback">
                      Especificação Inválida
                    </div>
                </div>
                <div class="col-md-6">
                    <label for="valorBolo" class="col-form-label">Valor:</label>
                    <input type="number" class="form-control" name="valorBolo" max="1000" value="<?=$valor_Bolo?>" required>
                    <div class="invalid-feedback">
                      Valor Inválido
                    </div>
                <div class="row mt-5 ">
                  <div class="col-md-2">
                    <input type="file" id="foto" name="foto" accept="image/*" class="custom-file-input">
                  </div>
                  <div class=" text-end  col-md-10">
                  <a class=" btn btn-primary px-3" role="button" aria-disabled="true" href="index.php">Voltar</i></a>
                  <input type="submit" class=" btn btn-success" value="Salvar">
                </div>
                </div>

              </div>
            </div>
          </form>
        </div>
      </div>
    </div>
  </div>

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