<?php
	include 'cabecalho.php';
?>

 <h1>SIGE-Sistema de Gestão Esportiva</h1>

  <nav class="navbar navbar-expand-lg navbar-light bg-light">
 
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarcrazy">
    <span class="navbar-toggler-icon"></span>
  </button>

  <div class="collapse navbar-collapse" id="navbarcrazy">
    <ul class="navbar-nav mr-auto">
      <li class="nav-item">
        <a class="nav-link" href="index.php">Quem somos</a>
      </li>
      <li class="nav-item active">
        <a class="nav-link" href="como-funciona.php">Como Funciona</a>
      </li>
      <li class="nav-item">
        <div class="dropdown">
          <a class="nav-link" id="dropdownMenuButton" data-toggle="dropdown" href="contato.php">Contato</a>
          <div class="dropdown-menu" aria-labelledby="dropdownMenuButton">
            <a class="dropdown-item" href="#">Email</a>
            <a class="dropdown-item" href="#">Facebook</a>
            <a class="dropdown-item" href="#">WhatsApp</a>
          </div>
        </div>
      </li>
    </ul>
    <a id="registro" class="nav-link" href="cadastro.php">Registre-se </a> 
    <a id="Login" class="nav-link" href="login.php">Login </a>   
  </div>
</nav>

<div class="container">
  <img src='imagens/como funciona.png' class="img-fluid" max-width: "100%" height: auto alt="Responsive image" '>
</div>

<?php
	include 'rodape.php';
?>
