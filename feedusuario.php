<!DOCTYPE html>
<html lang="en">
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.0/css/all.min.css">
    <meta charset="UTF-8">
    <title>Feed de Usuários</title>
    <link rel="stylesheet" type="text/css" href="feed.css" />
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Cinzel+Decorative&display=swap">
    <script type="module" src="https://unpkg.com/ionicons@7.1.0/dist/ionicons/ionicons.esm.js"></script>
    <script nomodule src="https://unpkg.com/ionicons@7.1.0/dist/ionicons/ionicons.js"></script>
    <style>
   <style>
    body {
        margin: 0;
        font-family: 'Cinzel Decorative', cursive;
        background-color: #333;
    }

    .gallery {
        display: flex;
        flex-wrap: wrap;
        justify-content: center;
    }
    .image {
        width: 100%;
        display: block;
		border-radius: 15px;
    }
    .image-container {
        border: 2px solid white;
        background-color: white; /* Cor de fundo da borda preenchida */
        padding: 10px;
        box-sizing: border-box;
        margin: 10px; /* Espaçamento entre as imagens */
        text-align: center;
        position: relative; /* Necessário para posicionar a legenda em relação a este contêiner */
        border-radius: 15px; /* Valor de borda arredondada, ajuste conforme necessário */
    }

    .caption {
        color: black;
        position: absolute;
        bottom: -10px; /* ajusta a legenda */
        left: 0;
        width: 100%;
        padding: 5px;
        box-sizing: border-box;
        z-index: 1; /* Garante que a legenda fica sobre a borda */
    }

	
</style>

    </style>
   
<div class="navigation">
   
    <ul>
    <li class="list active">
              <a href="feedusuario.php">
             <span class="icon">
              <ion-icon name="arrow-undo-outline"></ion-icon>
             </span>
             <span class="text">Voltar</span>


        <li class="list active">
          <a href="livro.html">
         <span class="icon">
            <ion-icon name="book"></ion-icon>
         </span>
         <span class="text">Nossa Hisória</span>
                    
          <li class="list">
             <a href="feedusuario.php">
              <span class="icon">
                <ion-icon name="home-outline"></ion-icon>
              </span>
                   <span class="text">Início</span>

               <li class="list">
              <a href="anexar.html">
                   <span class="icon">
                   <ion-icon name="duplicate-outline"></ion-icon>
                   </span>
           <span class="text">Novo Post</span>

               <li class="list">
               <a href="paginaloginus.php">
             <span class="icon">
                <ion-icon name="person-outline"></ion-icon>
             </span>
              <span class="text">Usuário</span>
            </a>
        </li>
        </a>
        <div class="indicador"></div>
    </ul>
</div>
<div>
<img id="imagem" src="LumusVassoura.png" alt="Imagem" />

<div class="gallerey" link href="feed4.css" class>
<?php
$servername = "localhost"; 
$username = "root";
$password = "";
$dbname = "banco";

$conn = new mysqli($servername, $username, $password, $dbname);

if ($conn->connect_error) {
    die("Falha na conexao: " . $conn->connect_error);
}

$sql = "SELECT imagem, descricao, nome, link FROM feed";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
    while ($row = $result->fetch_assoc()) {
        echo '<br>';
        echo '<br>';
        echo '<br>';
        echo '<br>';
        echo '<br>';
        echo '<br>';
        echo '<br>';
        echo '<br>';
        echo '<br>';
		echo '<center>';
        echo '<img src="foto/' . $row["imagem"] . '" height="450" width="600" alt="Imagem "  >';
        echo '<br>';
        echo '<font color="white">' . $row["nome"];
        echo '<br>';
        echo '<font color="white">' . $row["descricao"];
        echo '<br>';
        echo '<font color="white"> <a href=' . $row["link"] . '> Link para whatsapp </a>';
        echo '</center>';
    }
} else {
    echo "Nenhuma imagem encontrada.";
}
?>

        </div>


</div>
</div>

<script>
    const list = document.querySelectorAll('.list');
    function activeLink(){
        list.forEach((item)=>
        item.classList.remove('active'));
        this.classList.add('active');
    }
    list.forEach((item)=>
    item.addEventListener('click', activeLink));
</script>
<script type="module" src="https://unpkg.com/ionicons@7.1.0/dist/ionicons/ionicons.esm.js"></script>
<script nomodule src="https://unpkg.com/ionicons@7.1.0/dist/ionicons/ionicons.js"></script>
<script>
     // Obtém a imagem por ID
     const imagem = document.getElementById('imagem');

// Adiciona um ouvinte de evento para detectar quando a página é rolada
window.addEventListener('scroll', () => {
    // Calcula o fator de escala com base na posição de rolagem
    const scale = 1 - window.scrollY / 1000; // Ajuste o valor conforme necessário

    // Aplica a transformação de escala à imagem
    imagem.style.transform = `scale(${scale})`;
});
</script>

<!-- Conteúdo do site aqui -->
<div vw class="enabled">
        <div vw-access-button class="active"></div>
        <div vw-plugin-wrapper>
            <div class="vw-plugin-wrapper"></div>
        </div>
    </div>
    <script src="https://vlibras.gov.br/app/vlibras-plugin.js"></script>
    <script>
        new window.VLibras.Widget('https://vlibras.gov.br/app');
    </script>
<body>    
  <!-- Botões de acessibilidade -->
    <div style="position: fixed !important; top: 10px; width: 160px; height: 50px; right: 10px;"> <!-- Correção no posicionamento -->
        <button class="botao" onclick="alterarFonte('a');" title="Aumentar fonte">A+</button>
        <button class="botao" onclick="alterarFonte('d');" title="Diminuir fonte">A-</button>
        <button class="botao" onclick="alterarFonte('n');" title="Fonte normal">A</button>

      contraste
  <button onclick="toggleContrast()">Contraste</button>
  
</body>
</body>
</head>
</html>
