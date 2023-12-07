<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Contato</title>
    <link rel="stylesheet" href="https://unpkg.com/swiper/swiper-bundle.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css">
    <link rel="stylesheet" type="text/css" href="style.css" media="screen">
    <link rel="stylesheet" href="styleContato.css">
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

<div class="container-fluid" id="box">
        <div class="container" style="height: 80px;"></div>
        <div class="d-flex w-100 h-100 justify-content-center">
        <div class="row align-items-center justify-content-center gap-3" style="width: 90%; height: 90%;" id="rowPrincip">
                    <div class="col-lg-7 p-4 " id="formBox">
                        <h2 class="fs-1 text-dark fw-bold">Fale Conosco!</h2>
                        <form action="" id="form">
                            <div class="row">
                                <div class="col-md-6">
                                    <label for="" class="form-label pt-2 text-dark">Nome</label>
                                    <input type="text" class="inputLine" id="inputLine">
                                </div>
                                <div class="col-md-6">
                                    <label for="" class="form-label pt-2 text-dark">Sobrenome</label>
                                    <input type="text" class="inputLine" id="">
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-md-6">
                                    <label for="" class="form-label pt-4 text-dark">Email</label>
                                    <input type="email" class="inputLine" id="">
                                </div>
                                <div class="col-md-6">
                                    <label for="" class="form-label pt-4 text-dark">Celular</label>
                                    <input type="tel" class="inputLine " id="">
                                </div>
                            </div>
                            <label for="" class="form-label pt-4 text-dark" style="font-weight: 500;">Mensagem</label>
                            <div class="row">
                                <div class="col-md-12">
                                    <textarea class="textareaLine" id="exampleFormControlTextarea1" rows="3" placeholder="Escreva a sua mensagem aqui..." style="height: 150px;max-height: 200px;"></textarea>
                                </div>
                            </div>
                            <div class="btnEnviar pt-3">
                                <button type="submit">Enviar</button>
                            </div>
                        </form>
                    </div>
                    <div class="col-lg-4 p-0" id="boxInfos">
                        <div class="p-3" style="background-color: #fff; color: #191919;" id="contatoInfo">
                            <h2 class="fs-2 pt-2 pb-2 fw-bold" >Informações de Contato</h2>
                            <div>
                                <span><ion-icon name="location-outline"></ion-icon></span>R. Feliciano de Mendonça, 290 - Guaianases,<br> São Paulo - SP
                            </div>
                            <div>
                                <span><ion-icon name="mail-sharp"></ion-icon></span>BolletosBolo@gmail.com
                            </div>
                            <div class="pb-3">
                                <span><ion-icon name="call-outline"></ion-icon></span>+55 (11) 94739-3692

                            </div>
                        </div>
                            <div class="mapa bg-white mt-3" id="mapInfo">
                                <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3075.519873659317!2d-46.40172364799466!3d-23.552990988800907!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x94ce65086cafaf55%3A0xf7da96815e7611da!2sETEC%20de%20Guaianazes!5e0!3m2!1spt-BR!2sbr!4v1698645779620!5m2!1spt-BR!2sbr" width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
                            </div>
                    </div>
        </div>  
        </div>
        <div class="container" style="height: 80px;"></div>
</div>
   

    <?php include_once '../Components/footer.php' 
    ?>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
    <script src="index.js"></script>
    <script type="module" src="https://unpkg.com/ionicons@7.1.0/dist/ionicons/ionicons.esm.js"></script>
    <script nomodule src="https://unpkg.com/ionicons@7.1.0/dist/ionicons/ionicons.js"></script>
</body>
</html>