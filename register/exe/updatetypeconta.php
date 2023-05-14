<?php
    require('../../db_conection/conexao.php');
    session_start();
    $email = $_SESSION['email'];
    $tipoconta = $_POST['meu-select'];
    echo("$tipoconta");
    
    if (isset($tipoconta)) {
        $sql = "UPDATE usuario SET tipo_conta = '$tipoconta' WHERE email = '$email'";
        $result = $conn->query($sql);
        header ("Location: ../../home/home.php");
    };
?>