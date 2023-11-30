<?php
 session_start();

 $conexao= mysqli_connect('127.0.0.1','root','','banco') or die ('Não foi possivel conectar');


 $empresa = mysqli_real_escape_string($conexao, ($_POST['empresa']));
 $email = mysqli_real_escape_string($conexao,($_POST['email']));
 $senha = mysqli_real_escape_string($conexao, ($_POST['senha']));
 $repetir_senha = mysqli_real_escape_string($conexao, ($_POST['repetir_senha']));
 $representante = mysqli_real_escape_string($conexao, ($_POST['representante']));
 $cpf = mysqli_real_escape_string($conexao, ($_POST['cpf']));
 $genero = mysqli_real_escape_string($conexao, ($_POST['genero']));
 $cep = mysqli_real_escape_string($conexao, ($_POST['cep']));

 $sql = "INSERT INTO ongs (empresa, email, senha, repetir_senha, representante, cpf, genero, cep)
        VALUES ('$empresa','$email','$senha','$repetir_senha','$representante','$cpf','$genero','$cep')";
 
 mysqli_query($conexao,$sql);
 $conexao -> close();
 header('Location: cadastroOngs.html');
 exit;
?>