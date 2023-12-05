<?php
  require_once '../dao/BoloDao.php'; 
  $idBolo= $_GET['idBolo'];
  $bolo = BoloDao::selectById($idBolo);

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Bolletos - <?=$bolo ['nomeBolo'] ?></title>
    <link rel="stylesheet" href="https://unpkg.com/swiper/swiper-bundle.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css">
    <link rel="stylesheet" type="text/css" href="style.css" media="screen">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
</head>
<body>

    <?php
    session_start();
    if(isset($_SESSION["authClient"])){
        $authClient = $_SESSION["authClient"];
        include('./../Components/header-logado.php');
    }else{
        include('./../Components/header.php');
    }
    ?>
    

    <div class="container-fluid d-flex align-items-center justify-content-center  box" id="box" style="color: #fff; background-color: rgba(0, 0, 0, 0.8);">
        <div class="row vw-75 vh-75 justify-content-center align-items-center">
            <div class="col-md-5 d-flex justify-content-center align-items-center">
                <div class="container">
                    <h1 class=" pt-5 fw-bolder" style="font-size: 30px;"><?=$bolo['nomeBolo']?></h1>
                    <img id="preview" src="../img/bolos/<?=$bolo['fotoBolo']?>" alt="..."
                    class="img-fluid mt-5 rounded-5" style="width: 90%; height: 60%;  "  >
                </div>
            </div>
            <div class="col-md-6 bg-light text-dark rounded-5 d-flex align-items-center justify-content-center">
                <div class="container">
                <h2 class="fs-1">Sabor: </h2>
                <p class="fs-3"><?=$bolo['saborBolo']?></p>
                <h2 class="fs-1">Descrição: </h2>
                <p class="fs-3"><?=$bolo['descBolo']?></p>
                <h2 class="fs-1">Cobertura: </h2>
                <p class="fs-3"><?=$bolo['coberturaBolo']?></p>
                <h2 class="fs-1">Decoração: </h2>
                <p class="fs-3"><?=$bolo['decoracaoBolo']?></p>
                <h2 class="fs-1">Especificação: </h2>
                <p class="fs-3"><?=$bolo['especificacaoBolo']?></p>
                <h2 class="fs-1">Valor: </h2>
                <p class="fs-3"><?=$bolo['valorBolo']?></p>
                </div>
            </div>
        </div>
    </div>

    <?php include_once '../Components/footer.php' 
    ?>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
    <script src="index.js"></script>
    <script type="module" src="https://unpkg.com/ionicons@7.1.0/dist/ionicons/ionicons.esm.js"></script>
    <script nomodule src="https://unpkg.com/ionicons@7.1.0/dist/ionicons/ionicons.js"></script>
</body>
</html>