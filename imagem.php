<!DOCTYPE html>
<html lang="pt-br">
    <head>
        <title>Galeria de Imagens</title>
        <style>
            .gallerey {
                display : grid;
                grid-template-columns: repeat(auto-fill, minmax(200px, 1fr));
                gap: 10px;
            }

            .gallerey {
                width: 100% ;
                height: auto;
            }
        </style>
    </head>
    <body>
       <div class="gallerey">
            <?php
            $servername = "localhost"; 
            $username = "root";
            $password = "";
            $dbname = "banco";
            
            $conn = new mysqli($servername,$username,$password,$dbname);

            if ($conn->connect_error) {
                die("Falha na conexao: " . $conn->connect_error);
            }
 
            $sql = "SELECT local FROM feed";
            $result = $coon->query($sql);

            if ($result-> num_rows > 0) {
                while ($row = $result->fetch_assoc()){
                    echo '<img src="imagens/'. $row["local"] . '" alt="Imagem>"';
                    echo '<br>';
                }
            } else {
                echo "Nenhuma imagem encontrada." ;
            }
            ?>
        </div>
    </body>
</html>