<?php
    session_start();
    require('../../db_conection/conexao.php');
    $valor_doado = $_POST['valor-doacao'];
    $id_projeto = $_POST['id-projeto'];

    //Atualizar a tabela de Postagens
    if ($valor_doado <= 0) {
        header ("Location: ../index.php?msg=valor_errado");
    } else {
        //Capturar o valor atingido atual
        $sql = "SELECT valor_arrecadado FROM Postagens WHERE id = '$id_projeto'";
        $result = $conn->query($sql);
        $valor_arrecadado = $result->fetch_assoc();
        $valor_arrecadado = $valor_arrecadado['valor_arrecadado'];
        $valor_arrecadado += floatval($valor_doado);

        //Atualizar o valor atingido
        $sql = "UPDATE Postagens SET valor_arrecadado = '$valor_arrecadado' WHERE id = '$id_projeto'";
        $result = $conn->query($sql); 


        //Atualizar a tabela de Doacao
        date_default_timezone_set('America/Sao_Paulo');
        $today = date("d.m.y");
        $email = $_SESSION['email'];
        $sql = "INSERT INTO Doacao(valor, data_post, fk_email, fk_idPost) VALUES('$valor_doado', '$today', '$email', '$id_projeto')";
        $conn->query($sql);
    
        header ("Location: ../../home/home.php?msg=sucesso");
    }
?>