

<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login - Bolletos</title>
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
                    <img src="../IMG/undraw_Birthday_cake_re_bsw5.png" alt="" style="width: 90%;">
                    <p class="text-center">Aproveite nossos produtos!</p>
                </div>
            </div>
            <div class="col-md-5 rounded bg-body-tertiary p-4">
                <h1 class="text-center fs-2 mb-4" style="color: #39160E;">Faça Login!</h1>
                <form method="post" action="loginProcess.php" enctype="multipart/form-data" class="needs-validation" novalidate>
                    <input type="hidden" value="SALVAR" name="acao" >
                        <div class="col">
                            <label for="email" class="form-label fs-5 mt-2">Email:</label>
                            <input class="form-control"  type="email" name="emailCliente" id="" required>
                            <label for="senha" class="form-label fs-5 mt-2">Senha:</label>
                            <input class="form-control"  type="password" name="senhaCliente" id="" required>
                        </div>
                        <p>Não possui um cadastro? <a href="cadastro.php">Cadastre-se!</a></p>
                        <button type="submit" class="btn btn-primary mt-1" value="Salvar">Entrar</button>
                </form>

            </div>
        </div>
    </div>



    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
    <script src="index.js"></script>
    <script type="module" src="https://unpkg.com/ionicons@7.1.0/dist/ionicons/ionicons.esm.js"></script>
    <script nomodule src="https://unpkg.com/ionicons@7.1.0/dist/ionicons/ionicons.js"></script>
</body>
</html>