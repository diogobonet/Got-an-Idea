<?php 
    require('../../db_conection/conexao.php');
    session_start();
    $email = $_SESSION['email'];

    $opcao = 0; //Irá definir qual tipo de alteração no Banco de dados será realizada
    //A cadeia de if abaixo irá setar o valor de $opcao
    if (isset($_POST['alterar-nome'])) {$opcao = 1;}
    else if (isset($_POST['alterar-telefone'])) {$opcao = 2;}
    else if (isset($_POST['alterar-cidade'])) {$opcao = 3;}
    else if (isset($_POST['alterar-formacao'])) {$opcao = 4;}

    //Switch case das alterações de:
    switch($opcao) {
        case 1: //NOME
            $nome = $_POST['alterar-nome'];

            $sql = "UPDATE usuario SET nome = '$nome' WHERE email = '$email'";
            $result = $conn->query($sql);

            $_SESSION['nome'] = $nome; //Atualizando o nome dentro da session
            header ("Location: ../edit_Page.php?msg=sucesso");
            break;
        case 2: //TELEFONE
            $telefone = $_POST['alterar-telefone'];

            $sql = "UPDATE usuario SET telefone = '$telefone' WHERE email = '$email'";
            $result = $conn->query($sql);

            header ("Location: ../edit_Page.php?msg=sucesso");
            break;
        case 3: //CIDADE
            $cidade = $_POST['alterar-cidade'];

            $sql = "UPDATE usuario SET cidade = '$cidade' WHERE email = '$email'";
            $result = $conn->query($sql);

            header ("Location: ../edit_Page.php?msg=sucesso");
            break;
        case 4: //FORMAÇÃO
            $cidade = $_POST['alterar-cidade'];

            $sql = "UPDATE usuario SET cidade = '$cidade' WHERE email = '$email'";
            $result = $conn->query($sql);

            header ("Location: ../edit_Page.php?msg=sucesso");
            break;
        default:
            header ("Location: ../edit_Page.php");
            break;
    }
?>
