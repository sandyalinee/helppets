<?php
session_start()


echo "INSERIR !!!";

    $email = $_POST["email"];  
    $sql = "SELECT * FROM usuarios WHERE email = '$email'";
    $result = $conn->query($sql);
    
    if ($_SERVER["REQUEST_METHOD"] == "POST") {


    if ($result->num_rows > 0) {
        // Gere um token de redefinição de senha único
        $token = bin2hex(random_bytes(16));

        // Armazene o token no banco de dados junto com a data e hora da solicitação
        $sql = "UPDATE usuarios SET reset_token = '$token', reset_expires = NOW() + INTERVAL 1 HOUR WHERE email = '$email'";
        $conn->query($sql);

        // Envie um e-mail com um link de redefinição de senha para o usuário
        $reset_link = "http://seusite.com/resetar_senha.php?token=" . $token;
        $mensagem = "Você solicitou a redefinição de senha. Clique no seguinte link para redefinir sua senha: $reset_link";
        email($email, "Redefinição de Senha", $mensagem);

        echo "Um e-mail com instruções para redefinir sua senha foi enviado para o seu endereço de e-mail.";
    } else {
        echo "Não foi possível encontrar um usuário com este endereço de e-mail.";
    }
}

// Feche a conexão com o banco de dados
$conn->close();
?>