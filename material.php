<?php 

include 'cabecalho.php';
include 'conexao.php';

$nome_material = $_POST["nome_material"];
$qtd_material = $_POST["qtd_material"];

mysql_query("insert into tb_material (nome_material, qtd_material) values ('$nome_material', '$qtd_material')") or die(mysql_error());

include 'rodape.php';
	
?>