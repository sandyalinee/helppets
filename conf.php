<?php 
session_start();

$conexao= mysqli_connect('127.0.0.1','root','','banco') or die ('Não foi possivel conectar');

if(empty($_POST['email']) || empty($_POST['senha'])) {
    header('Location: paginaloginus.php');
    exit();
}

$email = mysqli_real_escape_string($conexao, $_POST['email']);
$senha = mysqli_real_escape_string($conexao,($_POST['senha']));

echo $email;
echo $senha;
 
$query = "select nome from usuario where email = '{$email}' and senha = '{$senha}'";

echo $query;

$result = mysqli_query($conexao, $query);

$row = mysqli_num_rows($result);
echo $row;    
 if($row == 1) {
     $loginbr = mysqli_fetch_assoc($result);
     $_SESSION['usuario'] = $loginbr['nome'];
     //chamar o nome do site
     header('Location:feedusuario.php');
     exit();
 } else {
     $_SESSION['nao_autenticado'] = true;
     header('Location: paginaloginus.php');
     exit();
  }

?>