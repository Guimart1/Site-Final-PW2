<html lang="pt-br"><head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Favoritos</title>
    <link rel="stylesheet" href="https://unpkg.com/swiper/swiper-bundle.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css">
    <link rel="stylesheet" type="text/css" href="style.css" media="screen">
    <link rel="stylesheet" href="styleFavorito.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">

</head>
<body>
    <?php
    session_start();
        $authClient = $_SESSION["authClient"];
        include_once "../Components/header-logado.php"
    ?>
    <div class="bump bg-black" style="height: 11vh;"></div>
    <div class="bump bg-black" style="height: 11vh;width:100vw; position:fixed;top: 0;"></div>
    <div class="container-fluid mt-5 pb-5" style="border-bottom: 3px solid #000;">
        <div class="row">
            <div class="col-md-3">
                <div class="container d-flex justify-content-center align-items-center h-100 w-100">
                    <img src="../img/cliente/<?=$authClient['img']?>" alt="" style="width: 60%; border-radius: calc(100-10px); ">
                </div>
            </div>
            <div class="col">
                <h1 class="mt-5" style="font-size: 3em;">Olá <?=$authClient['nome']?>, <br>Veja seus bolos favoritos!</h1>
                <h2 class="mt-4">Você possui x bolos favoritos:</h2>
            </div>
            <p class="text-center">Função de Favoritar incompleta.</p>
        </div>
    </div>
    <div class="container-fluid h-100 w-100 text-center mt-5 d-flex justify-content-center align-items-center p-0 m-0" style="height: fit-content;">
        <div class="h-100 w-100 m-0 p-0 ">
            <h1 class="mb-3 fw-bold" style="font-size: 3em;">Bolos Favoritos:</h1>
            <div class="row w-100 justify-content-evenly flex-wrap gap-5 align-items-center  pb-5" id="fundoFavorito">
                <div class="col-md-3 bg-white rounded-4 mt-3 container-fluid ">
                    <a class="text-dark" href="" style="text-decoration: none;">
                    <div class="container">
                    <img class="rounded-4 mt-3" src="../img/bolos/489c7da8546ae3945651f812f9a2ed80.jpg" alt="" style="width: 100%; height:50%; object-fit:cover">
                    <h2 class="fw-bold mt-3">Bolo de Cholocate</h2>
                    <p class="fs-4" style="text-align: justify;">Um bolo de morango com cobertura de caramelo é uma combinação divina de sabores frutados e caramelizados.
                        A base do bolo é repleta de pedaços suculentos de morango, proporcionando uma explosão de frescor a cada mordida.</p>
                    </div>
                    </a>

                </div>
                
            </div>
            <?php include_once '../Components/footer.php' 
            ?>
        </div>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
    <script src="index.js"></script>
    <script type="module" src="https://unpkg.com/ionicons@7.1.0/dist/ionicons/ionicons.esm.js"></script>
    <script nomodule src="https://unpkg.com/ionicons@7.1.0/dist/ionicons/ionicons.js"></script>
</body>