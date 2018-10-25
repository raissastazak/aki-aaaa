<?php
include 'cabecalho.php';
include 'conexao.php';
?>

<table border="1">
  <tr>
    <td>Material</td>
    <td>Quantidade</td>
    <td>Editar</td>
    <td>Remover</td>
  </tr>


<?php

$sql = mysql_query("select * from tb_material") or die("errouuu");

if (mysql_num_rows($sql) > 0 )
{       
 	while($material = mysql_fetch_array($sql))
        {
		$nome_material = $material['nome_material'];
		$qtd_material  = $material['qtd_material'];

		echo "<tr> 
    		   <td>$nome_material</td>
   			   <td>$qtd_material</td>
   			   <td><a href='#'>Editar</td>
   			   <td><a href='#'>Remove</td>";   			
}
}
?>
</table>
<a href="add-material.php">ADD</a>

<?php
	include 'rodape.php'; 
?>