<?php 
 
 include 'conexao.php';

$nome_aluno = $_POST['nome_aluno'];
$sobrenome_aluno = $_POST['sobrenome_aluno'];
$email_aluno = $_POST['email_aluno'];
$cpf_aluno = $_POST['cpf_aluno'];
$data_aluno = $_POST['data_aluno'];
$senha_aluno= $_POST ['senha_aluno'];
$senha_aluno = md5($senha_aluno);


if ($nome_aluno == '') 
{
	echo "vtnc e preenche o NOME fdp!!!";	
}

if ($sobrenome_aluno == '') 
{
	echo "vtnc e preenche o SOBRENOME fdp!!!";	
}

if ($email_aluno == '') 
{
	echo "vtnc e preenche o EMAIL fdp!!!";	
}

if ($cpf_aluno == '') 
{
	echo "vtnc e preenche o CPF fdp!!!";	
}

if ($data_aluno == '') 
{
	echo "vtnc e preenche a DATA fdp!!!";	
}

if ($senha_aluno == '') 
{
	echo "vtnc e preenche a senha fdp!!!";	
}



$in = mysql_query("insert into tb_aluno (nome_aluno, sobrenome_aluno, email_aluno, cpf_aluno, data_aluno, senha_aluno) values ('$nome_aluno', '$sobrenome_aluno', '$email_aluno', '$cpf_aluno', '$data_aluno', '$senha_aluno')") or die(mysql_error());

if ($in) 
{
	echo "DEU CERTO KRLLLLL";
}

?>