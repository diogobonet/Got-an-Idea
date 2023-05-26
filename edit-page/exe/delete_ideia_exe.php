<?php
    require "../../db_conection/conexao.php";

    $id_Post = $_POST['id_Post'];

    $sql = "DELETE FROM Postagens WHERE id = '$id_Post'";  //exlui a conta logada do banco de dados
    
    if($conn->query($sql) === true){
        // Essa mensagem está na pasta do register/verificar_mensagem.js
        header ("Location: ../edit_ideia_Page.php?msg=sucesso");
    }
    else{
        header ("Location: ../edit_ideia_Page.php?msg=apagarideiaerror");
    }
?>