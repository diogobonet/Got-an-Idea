<?php
    $host = 'x'; // Conexão no Servidor
    $user = 'x';
    $pass = 'x';
    $db = 'x';
    $conn = new mysqli($host, $user, $pass, $db);

    if($conn->connect_error){
        die("Erro: "+$conn->connect_error);
    }
?>
