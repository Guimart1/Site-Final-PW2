<html lang="pt-br"><head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Confeitaria</title>
    <link rel="stylesheet" href="https://unpkg.com/swiper/swiper-bundle.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css">
    <link rel="stylesheet" type="text/css" href="style.css" media="screen">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
</head>
<body class="vw-100">
    <?php
    session_start();
    if(isset($_SESSION["authClient"])){
        $authClient = $_SESSION["authClient"];
        include('./../Components/header-logado.php');
    }else{
        include('./../Components/header.php');
    }
    ?>

    <div class="container-fluid d-flex align-items-center box" id="box">
        <div class="container" id="textBox1">
            <h1>CONFIRA NOSSOS DELICIOSOS BOLOS!</h1>
            <h2>Os melhores bolos de Guaianases!</h2>
        </div>
    </div>
    <div class="container-fluid d-flex align-items-center" id="box" style="background-image: url(IMG/b39f8759e78e8bcebef4080156de36eb_bolo-floresta-negra-receitas-nestle\ \(2\).jpg);">
        <div class="container" id="textBox1">
            <h1>CONFIRA NOSSOS DELICIOSOS BOLOS!</h1>
            <h2>Os melhores bolos de Guaianases!</h2>
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