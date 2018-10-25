<?php
	include 'cabecalho.php';
?>

<h1>Adicionar Material</h1>

<form action="material.php" method="POST">
	Nome:
	<br>
	<input type="text" name="nome_material">
	<br>
	Quantidade:
	<br>
	<input type="number" name="qtd_material">
	<br>
	<br>
	<input type="submit" name="entrar" class="btn btn-outline-dark" id="bot1" value="Entrar">
</form>


<?php 
	include 'rodape.php'; 
?>