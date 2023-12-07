<?php
  require_once '../dao/BoloDao.php';
  require_once '../dao/AvaliacaoBoloDao.php'; 
  $idBolo= $_GET['idBolo'];
  $bolo = BoloDao::selectById($idBolo);
  $avaliacoes = AvaliacaoBoloDao::selectBoloId($idBolo)
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
    

    <div class="container-fluid" id="box" style="color:#fff; background-color: rgba(0, 0, 0, 0.8);">
        <div class="container" style="height: 80px;"></div>
        <div class="d-flex w-100 h-100 justify-content-center">
        <div class="row justify-content-center align-items-center">
            <div class="col-md-5 d-flex justify-content-center align-items-center">
                <div class="container-fluid">
                    <h1 class=" pt-5 fw-bolder" style="font-size: 30px;"><?=$bolo['nomeBolo']?></h1>
                    <img id="preview" src="../img/bolos/<?=$bolo['fotoBolo']?>" alt="..."
                    class="img-fluid mt-5 rounded-5" style="width: 90%; height: 60%;  "  >
                    <h2 class="fs-1 mt-3">Descrição: </h2>
                <p class="fs-3"><?=$bolo['descBolo']?></p>
                </div>
            </div>
            <div class="col-md-6">
                <div class="container-fluid bg-white w-100 text-dark p-4 rounded-5 mb-5">
                    <div class="row d-flex justify-content-evenly flex-wrap">
                        <div class="col-md-auto">
                            <div class="d-flex w-100 justify-content-center  mb-2">
                                <div class="iconBox d-flex justify-content-center align-items-center text-center bg-dark " style="width:56px; height: 48px;border-radius: 50%;">
                                    <i class="fa-solid fa-carrot text-white" style="font-size: 30px;"></i>
                                </div>
                            </div>
                            <h1 class="fw-bold text-center">Sabor</h1>
                            <p class="fs-3 text-center"> <?=$bolo['saborBolo']?></p>
                        </div>
                        <div class="col-md-auto">
                            <div class="d-flex w-100 justify-content-center mb-2">
                                <div class="iconBox d-flex justify-content-center align-items-center text-center bg-dark " style="width:56px; height: 48px;border-radius: 50%;">
                                    <img src="./IMG/cake-slice.svg" alt="" style="width: 65%;">
                                </div>
                            </div>
                            <h1 class="fw-bold text-center">Cobertura</h1>
                            <p class="fs-3 text-center"><?=$bolo['coberturaBolo']?></p>
                        </div>
                        <div class="col-md-auto" >
                            <div class="d-flex w-100 justify-content-center mb-2">
                                <div class="iconBox d-flex justify-content-center align-items-center text-center bg-dark " style="width:56px; height: 48px;border-radius: 50%;">
                                    <svg fill="#ffffff" width="65%" version="1.1" id="Layer_1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" viewBox="0 0 512.001 512.001" xml:space="preserve" stroke="#ffffff"><g id="SVGRepo_bgCarrier" stroke-width="0"></g><g id="SVGRepo_tracerCarrier" stroke-linecap="round" stroke-linejoin="round"></g><g id="SVGRepo_iconCarrier"> <g> <g> <path d="M481.642,304.43c-15.464-14.759-34.645-21.5-52.625-18.506c-18.899,3.151-33.064,11.954-42.103,26.163 c-0.477,0.75-0.913,1.518-1.351,2.283L280.984,84.295V13.803H243.72v40.804c-50.937-43.484-127.836-40.906-175.156,7.247 L0,131.623l13.288,13.06c24.188,23.771,56.099,36.809,90.006,36.809c0.461,0,0.929-0.003,1.391-0.007 c34.233-0.359,66.202-13.995,90.027-38.398l41.463-42.193L139.147,314.36c-0.441-0.766-0.884-1.53-1.356-2.273 c-9.038-14.209-23.204-23.012-42.103-26.163c-17.975-2.992-37.161,3.749-52.625,18.506 c-22.178,21.165-33.518,54.808-29.591,87.801c5.391,45.303,35.665,83.123,79.008,98.703c13.58,4.882,27.557,7.261,41.368,7.261 c30.273,0,59.74-11.444,82.4-33.077c24.033-22.945,36.707-56.107,33.078-86.548c-2.53-21.228-13.027-38.641-28.801-47.776 c-14.927-8.643-29.802-11.293-44.305-7.945l86.134-189.493l86.134,189.494c-14.503-3.346-29.381-0.699-44.305,7.945 c-15.773,9.135-26.27,26.548-28.801,47.776c-3.63,30.441,9.045,63.603,33.078,86.548c22.661,21.635,52.125,33.077,82.4,33.077 c13.809,0,27.79-2.381,41.368-7.261c43.344-15.58,73.618-53.4,79.008-98.703C515.16,359.238,503.821,325.595,481.642,304.43z"></path> </g> </g> </g></svg>
                                </div>
                            </div>
                            <h1 class="fw-bold text-center">Decoração </h1>
                            <p class="fs-3 text-center"><?=$bolo['decoracaoBolo']?></p>
                        </div>
                        <div class="col-md-auto">
                            <div class="d-flex w-100 justify-content-center mb-2">
                                <div class="iconBox d-flex justify-content-center align-items-center text-center bg-dark " style="width:56px; height: 48px;border-radius: 50%;">
                                    <ion-icon name="sparkles" style="color: #fff; font-size: 30px"></ion-icon>
                                </div>
                            </div>

                            <h1 class="fw-bold text-center">Especificação</h1>
                            <p class="fs-3 text-center" ><?=$bolo['especificacaoBolo']?></p>
                        </div>
                        <div class="col-md-auto">
                            <div class="d-flex w-100 justify-content-center mb-2">
                                <div class="iconBox d-flex justify-content-center align-items-center text-center bg-dark " style="width:56px; height: 48px;border-radius: 50%;">
                                    <i class="fa-solid fa-dollar-sign fa-bounce text-white" style="font-size: 30px;"></i>
                                </div>
                            </div>
                            <h1 class="fw-bold text-center">Valor</h1>
                            <p class="fs-3 text-center">R$<?=$bolo['valorBolo']?></p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    </div>
    <div class="container-fluid bg-dark text-white p-4">
    <?php if(isset($_SESSION["authClient"])) { ?>
    <div class="row">
        <div class="col-12 col-md-4 ps-5 mb-4 pe-5">
            <h2 class="fs-1">Envie sua avaliação:</h2>
            <form action="avaliacao.php" method="post">
            <input type="hidden" name="idBolo" id="idBolo" placeholder="id" value="<?=$idBolo?>">
            <label for="titulo" class="form-label fs-4">Titulo:</label>
            <input type="text" name="tituloDepoimento" id="" class="form-control" placeholder="O que gostaria de destacar?" required>
            <label for="titulo" class="form-label fs-4 mt-4">Escreva sua avaliação:</label>
            <textarea name="textoDepoimento" id="" cols="30" rows="10" class="form-control " style="max-height: 400px;" placeholder="Escreva o que você achou do bolo!" required></textarea>
                
            <button type="submit" class="btn btn-light mt-3 w-25">Enviar</button>


            </form>

        </div>
    </div>
    <?php } else{?>
        <p class="fs-5">Faça <a href="./login/login.php">Login</a> para realizar comentários!</p>
    <?php }; ?>

        <?php if($avaliacoes){?>
            <h1 class="ps-5 border-bottom pb-4">Avaliações:</h1>
        <?php } else { ?>
            <hr>
            <h1 class="ps-5">Não há avaliações no momento, comece fazendo a sua!</h1>
        <?php } ?>
        <?php foreach($avaliacoes as $avaliacao) { ?>
      <div class=" mt-3  row border-bottom pb-3 mb-1">
        <div class="col-md-1   text-center ps-5">
          <div style="height:70px; width: 70px; overflow:hidden " class="border rounded-circle">
            <img id="preview" src="../img/cliente/<?=$avaliacao[3]?>" alt="..."  style=" width: 100%;  height: 100%;" >
          </div>
        </div>
        <div class="col-md-11 ">
          <div class="mb-2">
            <span class="fw-bold fs-3"><?=$avaliacao[2]?> </span> <span class="text-white fs-4">  - <?=$avaliacao[0]?></span> 
          </div>
          <p class="text-white fs-5"><?=$avaliacao[1]?></p>
        </div>
      </div>
      <?php } ?>


    </div>
    <?php include_once '../Components/footer.php' 
    ?>
    <script src="https://kit.fontawesome.com/4da90581b4.js" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
    <script src="index.js"></script>
    <script type="module" src="https://unpkg.com/ionicons@7.1.0/dist/ionicons/ionicons.esm.js"></script>
    <script nomodule src="https://unpkg.com/ionicons@7.1.0/dist/ionicons/ionicons.js"></script>
    <script type="module" src="https://unpkg.com/ionicons@7.1.0/dist/ionicons/ionicons.esm.js"></script>
    <script nomodule src="https://unpkg.com/ionicons@7.1.0/dist/ionicons/ionicons.js"></script>
</body>
</html>