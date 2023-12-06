<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sobre Nós</title>
    <link rel="stylesheet" href="https://unpkg.com/swiper/swiper-bundle.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css">
    <link rel="stylesheet" type="text/css" href="style.css" media="screen">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
</head>
<body>
    <div class="container">
    <?php
    session_start();
    if(isset($_SESSION["authClient"])){
        $authClient = $_SESSION["authClient"];
        include('./../Components/header-logado.php');
    }else{
        include('./../Components/header.php');
    }
    ?>
    </div>

    <div class="container-fluid" id="box">
        <div class="container" style="height: 80px;"></div>
        <div class="d-flex w-100 h-100 justify-content-center">
        <div class="container-fluid bg-light w-75 rounded d-flex align-items-center justify-content-between pt-3 pb-3 mb-5 mt-5" id="boxSobre">
        <div class="row">

                <div class="col-md">
                <img src="IMG/closeup-bolo.jpg" alt="" class="pt-4 rounded mt-4" style="width: 100%;">
                </div>
                <div class="col-md">

                <h1 class="fw-bolder mb-3 p-5 fs-1">Sobre Nós</h1>
                <p class="p-5 fs-4">Bolletos é uma empresa de bolos fundada por Maria José Bolettos em 
                    1973 no bairro de Guaianazes no extremo leste de São Paulo.<br><br> Tudo começou com Maria 
                    fazendo bolos para seus vizinhos, assim ajudando seu marido a cuidar de suas crianças. 
                    Não demorou para estes vizinhos indicarem os deliciosos bolos de dona Maria para seus 
                    parentes e amigos, logo se espalhando por todo o bairro e São Paulo.
                    <br><br>
                    Em 2013 a nossa matriarca nos deixou, mas permanecemos nos comprometendo com a entrega 
                    de delicias para todos os públicos.

                    Há 50 anos trabalhamos com tradição e qualidade para todos os habitantes da capital de São Paulo,
                    venha conhecer mais dos nossos bollos!</p>

                </div>

            </div>
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