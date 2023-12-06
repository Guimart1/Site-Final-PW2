

<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login Administrativo - Bolletos</title>
    <link rel="stylesheet" href="https://unpkg.com/swiper/swiper-bundle.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css">
    <link rel="stylesheet" type="text/css" href="styleCadastro.css" media="screen">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
</head>
<body>
    <div class="container bg-body">
        <div class="row vh-100 align-items-center justify-content-evenly">
            <div class="col-md-6 d-flex align-items-center justify-content-center">
                <div class="div">
                    <h1 class="text-center fw-bolder" style="color: #39160E;">Bolletos</h1>
                    <div class="d-flex">
                    <i class="fa-solid fa-gear" style="font-size: 10px;transform: rotate(20deg)"></i>
                    <i class="fa-solid fa-gear" style="font-size: 20px;transform: rotate(180deg)"></i>
                    <i class="fa-solid fa-gear" style="font-size: 40px;transform: rotate(0deg)"></i>
                    <i class="fa-solid fa-gear" style="font-size: 60px;transform: rotate(900deg)"></i>
                    <i class="fa-solid fa-gear" style="font-size: 80px;transform: rotate(-10deg)"></i>
                    </div>

                    <p class="text-center">Paniel Administrativo - Bolletos</p>
                </div>
            </div>
            <div class="col-md-5 rounded bg-body-tertiary p-4">
                <h1 class="text-center fs-2 mb-4"">Entre como Admin</h1>
                <form method="post" action="loginProcess.php" enctype="multipart/form-data" class="needs-validation" novalidate>
                    <input type="hidden" value="SALVAR" name="acao" >
                        <div class="col">
                            <label for="email" class="form-label fs-5 mt-2">Email:</label>
                            <input class="form-control"  type="email" name="email" id="" required>
                            <label for="senha" class="form-label fs-5 mt-2">Senha:</label>
                            <input class="form-control"  type="password" name="senha" id="" required>
                        </div>
                        <?php
                          if(isset($_GET['status']) && $_GET['status']=="erro1"){
                        ?>
                          <div class="text-danger">
                              Usuário ou senha inválido(s)
                          </div>
                        <?php
                          }
                        ?>
                        <button type="submit" class="btn btn-primary mt-3" value="Salvar">Entrar</button>
                </form>

            </div>
        </div>
    </div>


    <script src="https://kit.fontawesome.com/4da90581b4.js" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
    <script src="index.js"></script>
    <script type="module" src="https://unpkg.com/ionicons@7.1.0/dist/ionicons/ionicons.esm.js"></script>
    <script nomodule src="https://unpkg.com/ionicons@7.1.0/dist/ionicons/ionicons.js"></script>
</body>
</html>