<?php
    require "../db_conection/conexao.php";

    session_start();
    $email = $_SESSION['email'];  //captura a chave primária do usuário logado

    $sql = "DELETE FROM usuario WHERE email = '$email'";  //exlui a conta logada do banco de dados
    
    if($conn->query($sql) === true){
        // Essa mensagem está na pasta do register/verificar_mensagem.js
        header ("Location: ../landing-page/index.php?msg=contaapagada");
    }
    else{
        header ("Location: ../profilePage/profilePage.php?msg=bderror");
    }
?>