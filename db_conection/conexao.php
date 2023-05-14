<?php
    $host = 'localhost'; // Conexão no Servidor
    $user = 'root';
    $pass = '';
    $db = 'gt_idea_db';

    try{
        $conn = new mysqli($host, $user, $pass, $db);
    }catch(Exception $e){
        echo "<h1 style='font-size:35px; color:red;'>Erro ao tentar se conectar ao banco!</h1>";
        echo "<h2 style='font-size:25px; color:orange'>Código do erro: " . $e->getCode()  . "</h2>";
        echo "<h2 style='font-size:25px;'>".$e->getMessage()."</h2>";
        die('');
    }
?>
