<?php
    $host = 'x'; // Conexão no Servidor (Pc do GB) por meio do Radmin VPN.
    $user = 'x';
    $pass = 'x';
    $db = 'gt_idea_DB';
    $conn = new mysqli($host, $user, $pass, $db);

    if($conn->connect_error){
        die("Erro: "+$conn->connect_error);
    }
?>