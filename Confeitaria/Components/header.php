<?php
echo '<header class="header">
<div class="logoContent">
    <a href="../ClienteArea/index.php" class="logo"><img src="IMG/logo.png" alt=""></a>    
    <h1 class="logoName" style="color: #e1e1e1;">Bolletos</h1>
</div>

<nav class="navbar">
    <a href="index.php">home</a>
    <a href="produtos.php">produtos</a>
    <a href="sobre.php">sobre nós</a>
    <a href="contato.php">contato</a>
</nav>

<div class="icon d-flex align-items-center justify-content-center">
    <a href="./login/login.php"><button type="button" class="btn btn-outline-light fw-bold"  style="height: 30px;">Login</button></a>
    <a href="./login/cadastro.php"><button type="button" class="btn btn-light ms-2 fw-bold" style="height: 30px;">Cadastrar</button></a>
    <i class="fas fa-bars ms-5" id="menu-bar"></i>
</div>

<div class="search">
    <input type="search" placeholder="search...">
</div>
</header>'
?>
