<?php  

$seu_banco = 'localhost';
$usuario = 'root';
$senha = '';

$conexao = mysql_connect($seu_banco, $usuario, $senha);
$banco = mysql_select_db('tcc', $conexao);

?>
