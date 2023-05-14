<?php
    require('../../db_conection/conexao.php');
    session_start();

    $id_Ideia = $_POST['id_Ideia'];

    $titulo = $_POST['alterar-titulo'];
    $descricao = $_POST['alterar-descricao'];
    
    //Tive que usar vários ifs não encadeados por que cada input tem que ser verificado
    if (isset($_POST['alterar-titulo']) && $_POST['alterar-titulo'] != '') {
        $sql = "UPDATE ideia SET titulo = '$titulo' WHERE id = '$id_Ideia'";
        $result = $conn->query($sql);
    
        header ("Location: ../edit_ideia_Page.php?msg=sucesso");
    }
    if (isset($_POST['alterar-descricao']) && $_POST['alterar-descricao'] != '') {
        $sql = "UPDATE ideia SET descricao = '$descricao' WHERE id = '$id_Ideia'";
        $result = $conn->query($sql);
    
        header ("Location: ../edit_Page.php?msg=sucesso");
    }

    header ("Location: ../edit_ideia_Page.php");
?>
