
<header class="header">
<div class="logoContent">
    <a href="#" class="logo"><img src="IMG/logo.png" alt=""></a>    
    <h1 class="logoName" style="color: #e1e1e1;">Bolletos</h1>
</div>

<nav class="navbar">
    <a href="index.php">home</a>
    <a href="produtos.php">produtos</a>
    <a href="sobre.php">sobre nós</a>
    <a href="contato.php">contato</a>
</nav>

<div class="icon d-flex align-items-center justify-content-center">
    <div class="dropdown text-end">
        <a href="#" class="text-white d-block link-body-emphasis text-decoration-none dropdown-toggle"
            data-bs-toggle="dropdown" aria-expanded="false">
            <img src="../img/cliente/<?=$authClient['img']? $authClient['img'] : 'padrao.png'?>" alt="mdo" width="42" height="42" class="rounded-circle">
        </a>
        <ul class="dropdown-menu text-small" style="color: #010101;">
            <a class="dropdown-item fs-4" href="#"><?=$authClient['nome']?></a>
            <li><a class="fs-5" href="#" style="text-decoration: none; color: #010101;"> Perfil</a></li>
            <li><a class="fs-5" href="#" style="text-decoration: none; color: #010101;"> Favoritos</a></li>

            <li><a class="fs-5" href="../ClienteArea/login/logout.php" style="text-decoration: none;color: #010101;" > Sign out</a></li>
        </ul>
    </div>
    <i class="fas fa-bars ms-5" id="menu-bar"></i>
</div>

<div class="search">
    <input type="search" placeholder="search...">
</div>
</header>

