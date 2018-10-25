<?php 
	include 'cabecalho.php';
?>

<h1>Login</h1>

<form action="valida-login.php" method="POST">

Usuario
<br>
<input type="text" name="email_aluno">
<br>
Senha
<br>
<input type="password" name="senha_aluno">
<br>
<br>
<input type="submit" name="entrar" class="btn btn-outline-dark" id="bot1" value="Entrar">

</form>

Não possue conta? <a href="cadastro.php">Cadastre-se</a>

<br>
<a href="#">Teste</a>

<?php 
	include 'rodape.php';
?>