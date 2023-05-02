<?php
    $host = 'localhost'; // Conexão no Servidor
    $user = 'root';
    $pass = '';
    $db = 'gt_idea_db';
    $conn = new mysqli($host, $user, $pass, $db);

    if($conn->connect_error){
        die("Erro: "+$conn->connect_error);
    }
?>
