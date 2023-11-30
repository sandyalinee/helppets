<?php
try
{
    $con = new PDO('mysql:host=localhost;dbname=banco', 'root', '');
}catch(PDOException $e)
{
    echo "erro de conexão, " . $e->getMessage();
}
?>