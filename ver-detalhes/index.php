<?php
        session_start();
        require("../cabeçalho/cabecalho.php");
        require("../db_conection/conexao.php");
        require('exe/verificarInfos.php');

        $idPost = $_POST['id-post'];

        $sql = "SELECT usuario.imagem, usuario.tipo_conta, usuario.apelido, usuario.nome, Postagens.* FROM Usuario INNER JOIN Postagens ON id = $idPost";
        $result = $conn->query($sql);
        $postagem = $result->fetch_assoc();
        enviarBarra($postagem['valor_arrecadado'], $postagem['meta_de_arrecadacao']); // Style da barra dinâmico!
    ?>
<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?=$postagem['titulo']?> | Got an Idea💡</title>
    <link rel="shortcut icon" href="../img/favicon.jpeg" type="image/x-icon">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:opsz,wght,FILL,GRAD@20..48,100..700,0..1,-50..200" />
    <link rel="stylesheet" href="../cabeçalho/cabecalho.css">
    <link rel="stylesheet" href="css/style.css">
</head>
<body>
    
    <header class="header-details">
        <span class="material-symbols-outlined">arrow_back</span>
        <h2>Ideia ou Projeto</h2>
    </header>

    <main>
        <section class="sec-infouser">
            <div class="div-namephoto">
                <div class="div-img"><img src="../img/messi.jpeg" alt=""></div>
                <div class="nome-function">
                    <h1>Diogo Bonet</h1>
                    <h2>Idealizador</h2>
                </div>
            </div>
            <h3 class="data-postagem">Postado em 25/05/2023</h3>
        </section>

        <section class="section-content">
            <h1>Titulo do Projeto | <span class="filtro-h1">Educação</span></h1>
            <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Natus nihil rerum illo obcaecati neque sit quod harum odio aut illum rem expedita animi ducimus, mollitia facere voluptas fugit dolor vero.
            Lorem ipsum dolor sit amet consectetur, adipisicing elit. Possimus, rerum accusantium dolores sed facilis qui animi aperiam eaque veniam necessitatibus laboriosam sint nostrum assumenda minus soluta adipisci minima ratione nihil.
            Lorem ipsum dolor sit amet consectetur adipisicing elit. Ipsam odio eum voluptatibus beatae omnis et possimus eveniet a praesentium modi at, distinctio, ipsa perspiciatis fuga voluptate exercitationem veniam alias! Quo?
            </p>
        </section>
        
        <section class="sec-donation">
            <button id="botao-doacao">Doar</button>
        </section>
    </main>

    <section id="modal-doacao" class="edit-modal-main">
        <div class="modal-changes-infos" id="change-nome">
            <div class="modal-header-row">
                <h1>Insira o valor da doação</h1>
                <span id="fechar-modal" class="material-symbols-outlined button-close">close</span>
            </div>
            <form class="modal-form" action="exe/edit_Page_exe.php" method="POST">
                <input type="number" name="alterar-nome" placeholder="R$">
                <button type="submit">Doar</button>
            </form>
        </div>
    </section>
    <footer>

    </footer>
    <script src="js/script.js"></script>
</body>
</html>