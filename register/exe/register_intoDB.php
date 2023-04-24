<?php
    $email = $_POST['email_input'];
    $apelido = $_POST['apelido_input'];
    $nome = $_POST['nome_input'];
    $sobrenome = $_POST['sobrenome_input'];
    $senha = md5($_POST['senha_input']);

    $nome = $nome + " " + $sobrenome;

?>

<?=$nome?>