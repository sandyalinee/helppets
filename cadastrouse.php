<?php
 session_start();

 $conexao= mysqli_connect('127.0.0.1','root','','banco') or die ('Não foi possivel conectar');


 $nome = mysqli_real_escape_string($conexao, ($_POST['nome']));
 $email = mysqli_real_escape_string($conexao,($_POST['email']));
 $senha = mysqli_real_escape_string($conexao, ($_POST['senha']));
 $repetir_senha = mysqli_real_escape_string($conexao, ($_POST['repetir_senha']));
 $cpf = mysqli_real_escape_string($conexao, ($_POST['cpf']));
 $genero = mysqli_real_escape_string($conexao, ($_POST['genero']));
 $cep= mysqli_real_escape_string($conexao, ($_POST['cep']));

 $sql = "INSERT INTO usuario (nome, email, senha, repetir_senha, cpf, genero, cep)
        VALUES ('$nome','$email','$senha','$repetir_senha','$cpf','$genero','$cep')";
 
 mysqli_query($conexao,$sql);
 $conexao -> close();
 header('Location: cadastrousuario.html');
 exit;
?>

