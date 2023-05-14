<?php
    require('../../db_conection/conexao.php');
    session_start();
    $email = $_SESSION['email_firstregister'];
    $tipoconta = $_POST['meu-select'];
    echo("$tipoconta");
    
    if (isset($tipoconta)) {
        $sql = "UPDATE usuario SET tipo_conta = '$tipoconta' WHERE email = '$email'";
        $result = $conn->query($sql);
        session_destroy();
        header('Location: ../../login/login.php?msg=0');
    };
?>