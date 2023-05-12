<?php
    require('../db_conection/conexao.php');
    session_start();

    $email = $_SESSION['email'];
    $imagem = $_SESSION['imagem'];
?>

<header>
    <link rel="stylesheet" href="headerr.css">
    <!-- IMPORTTANDO OS ICONS DO GOOGLE PARA O PESQUISAR (LUPA) -->
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:opsz,wght,FILL,GRAD@20..48,100..700,0..1,-50..200" />
        <nav>
            <div class="img-wrapper">
                <img class="logo-header" src="../img/logowhite.png" alt="Logo do Header">
            </div>
                <input placeholder="Pesquisar" type="search" name="" id="search-home">
                <a href="">Encontre ideias</a>
                <a href="">Conectado</a>
                <a href="">Ranking</a>
                <div class="div-userimg">
                <?php echo "<img class='user-img' src='data:image;base64,".base64_encode($imagem)."' alt= 'Foto do usuário'>"; ?>
        </nav>
    </header>
