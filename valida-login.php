<?php  
include 'conexao.php';

$email_aluno = $_POST['email_aluno'];
$senha_aluno= $_POST ['senha_aluno'];
$senha_aluno = md5($senha_aluno);

$sql = mysql_query("select * from tb_aluno where email_aluno = '$email_aluno' and senha_aluno = '$senha_aluno' limit 1") or die("erro");

$linhas = mysql_num_rows($sql);


if ($linhas == '') 
{
	echo "Senha invalida";	
}
else
{
	session_start();
	$_SESSION['login'] = $email_aluno;
	?>
	<script type="text/javascript">
		window.location = 'lista-materiais.php';
	</script>
	<?php
}


?>
