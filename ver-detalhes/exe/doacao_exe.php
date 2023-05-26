<?php
    $valor_doado = $_POST['valor-doacao'];
    $id_projeto = $_POST['id-projeto'];

    if ($valor_doado < 0) {
        header ("Location: ../index.php?msg=valor_errado");
    } else {
        //Capturar o valor atingido atual
        $sql = "SELECT valor_arrecadado FROM Postagens WHERE id = '$id_projeto'";
        $result = $conn->query($sql);
        $valor_arrecadado = $result->fetch_all(MYSQLI_ASSOC); 
        $valor_arrecadado += $valor_doado;

        //Atualizar o valor atingido
        $sql = "UPDATE postagens SET atingido = '$atingido' WHERE id = '$id_projeto'";
        $result = $conn->query($sql); 
        header ("Location: ../index.php?msg=sucesso");
    }
?>