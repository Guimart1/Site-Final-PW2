<?php
  session_start();

$auth = $_SESSION["auth"];
?>

<header class="p-3 border-bottom bg-secondary text-white shadow" style="height: 10vh">
  <div class="container">
    <div class="d-flex flex-wrap align-items-center justify-content-center justify-content-lg-start">
      <a href="/sites/Confeitaria/Site-Final-PW2/Confeitaria/ClienteArea/index.php" class="d-flex align-items-center mb-2 mb-lg-0 link-body-emphasis text-decoration-none">
        <img src="../../ClienteArea/IMG/logo.png" width="30" height="30" class="d-inline-block align-top" alt="">
      </a>
      <div class="nav col-12 col-lg-auto me-lg-auto mb-2 justify-content-center mb-md-0 ms-3 fw-bold">
        Bolletos
      </div>

      <div class="dropdown text-end">
        <a href="#" class="text-white d-block link-body-emphasis text-decoration-none dropdown-toggle"
          data-bs-toggle="dropdown" aria-expanded="false">
          <img src="./../../img/user/<?=$auth['img']? $auth['img'] : 'padrao.png';?>" alt="mdo" width="32" height="32" class="rounded-circle">
        </a>
        <ul class="dropdown-menu text-small">
          <li><a class="dropdown-item" href="../login/logout.php">Sign out</a></li>
        </ul>
      </div>
    </div>
  </div>
</header>