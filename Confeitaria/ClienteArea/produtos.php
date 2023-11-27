<?php
    require_once "BoloDao.php";
    $bolos = BoloDao::selectAll();
?>

<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Produtos</title>
    <link rel="stylesheet" href="https://unpkg.com/swiper/swiper-bundle.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css">
    <link rel="stylesheet" type="text/css" href="style.css" media="screen">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
</head>
<body>
    <?php
        include_once '../Components/header.php';
    ?>

    <div class="container-fluid d-flex align-items-center justify-content-center box" id="box">
        <div class="row w-75 justify-content-evenly flex-wrap " id="barrier">        
            <?php foreach($bolos as $produto) { 
            $imagem_User = $produto[9];
        ?>

            <div class="col-md-5 col-sm-6 col-lg-4 col-xl-3 align-items-center mt-3 mb-3">
                <div class="card mt-4" style="width: 100%">
                    <img src="../img/bolos/<?=$imagem_User?>" class="card-img-top" alt="..." style="height: 250px;">
                    <div class="card-body">
                      <h2 class="card-title fw-bold"><?=$produto[1]?></h2>
                      <p class="card-text fs-3"><?=$produto[2]?></p>
                    </div>
                  </div>
            </div>
        <?php } ?>
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