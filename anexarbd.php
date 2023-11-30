<?php
include_once "conexao.php";
$nome=$_POST['txtnome'];
$descricao=$_POST['txtdescricao'];
$link=$_POST['txtlink'];
$caminho_temp=$_FILES['anexo']['tmp_name'];
$nomearquivo=$_FILES['anexo']['name'];
$pastaservidor = "c:/wamp64/www/pasta/foto/";
$arquivoservidor = $pastaservidor . $nomearquivo;
move_uploaded_file($caminho_temp,$arquivoservidor);
echo $nome . '<br>'; 
echo $descricao . '<br>';
echo $link . '<br>';
echo $nomearquivo . '<br>';

$sql="INSERT INTO feed (nome, descricao, imagem, link) VALUES (:nome, :descr, :arquiv, :link)";

$query = $con->prepare($sql);
$query->bindParam(':nome', $nome, PDO::PARAM_STR);
$query->bindParam(':descr', $descricao, PDO::PARAM_STR);
$query->bindParam(':link', $link, PDO::PARAM_STR);
$query->bindParam(':arquiv', $nomearquivo, PDO::PARAM_STR);

echo $sql;

$query->execute();

echo "<h1>Arquivo enviado com sucesso!!!</h1>";
echo "<br><a href='anexar.html'>voltar</a>";


?>