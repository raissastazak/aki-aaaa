<?php 
	include 'cabecalho.php';
?>

<h1>Cadastro</h1>

<form action="cadastro-banco.php" method="post" text-center>
Nome<br>
<input type="text" name="nome_aluno">
<br>
Sobrenome<br>
<input type="text" name="sobrenome_aluno">
<br>
E-mail<br>
<input type="text" name="email_aluno">
<br>
Cpf<br>
<input type="number" name="cpf_aluno">
<br>
Data de Nasc.<br>
<input type="number" name="data_aluno">
<br>
Senha<br>
<input type="password" name="senha_aluno">
<br>
<br>
<input type="submit" name="entrar" class="btn btn-outline-dark" id="bot1" value="Cadastrar">

</form>

Ja possui uma conta? <a href="login.php">Entre</a>


<?php 
	include 'rodape.php';
?>