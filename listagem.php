<!DOCTYPE html>
<html lang="pt-br">
<head>
    <title>Listagem de Imagem</title>
</head>
<body>
<table>
<tr><th>Nome</th>
    <th>Descrição</th>    
	<th>Link</th>
    <th>Foto</th></tr>
<?php
require_once "conexao.php";
$sql="SELECT * FROM feed ORDER BY nome";
$query = $con->prepare($sql);
$query->execute();
while($resposta= $query->fetch(PDO::FETCH_ASSOC))
{
?>
<tr>
    <td><?php echo $resposta["nome"]; ?></td>
    <td> <?php echo $resposta["descricao"]; ?></td>
	 <td><?php echo $resposta["link"]; ?></td>
    <td><img src='./foto/<?php echo $resposta["imagem"]; ?>' alt="" width="100px"></td>
</tr>
<?php
}
?>
</table>
</body>
</html>