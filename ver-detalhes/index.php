<?php
        session_start();
        require("../cabeçalho/cabecalho.php");
        require("../db_conection/conexao.php");
        require('exe/verificarInfos.php');

        if(!isset($_SESSION['logado'])) {
            header ("Location: ../login/login.php");
        }

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
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:opsz,wght,FILL,GRAD@20..48,100..700,0..1,-50..200" />
    <link rel="stylesheet" href="../cabeçalho/cabecalho.css">
    <link rel="stylesheet" href="css/style.css">
    <link rel="shortcut icon" href="../img/favicon.png" type="image/x-icon">
</head>
<body>
    <header class="header-details">
        <span onclick='redirecionar("../home/home.php")' class="material-symbols-outlined">arrow_back</span>
        <h2>Ideia ou Projeto</h2>
    </header>

    <main>
        <section class="sec-infouser">
            <div class="div-namephoto">
                <div class="div-img"><img src="../img/messi.jpeg" alt=""></div>
                <div class="nome-function">
                    <h1><?=$postagem['nome']?></h1>
                    <h2><?=obterTipoConta($postagem['tipo_conta']);?></h2>
                </div>
            </div>
            <h3 class="data-postagem">Postado em <?=$postagem['data_post']?></h3>
        </section>

        <section class="section-content">
            <h1><?=$postagem['titulo']?> | <span class="filtro-h1"><?=$postagem['filtros']?></span></h1>
            <p><?=$postagem['descricao']?></p>
            <?php
                $tipoPostagem = verificarTipo($postagem['fk_idPost']);
                if($tipoPostagem == "Projeto"){
                    echo "
                        <section class='sec-donation'>
                            <div id='doacao_barra'></div>
                            <button id='botao-doacao'>Doar</button>
                        </section>
                    ";
                    echo "
                        <section class='doacao-infos'>
                            <p><span class='valor-arrecadado'>R$ " . $postagem['valor_arrecadado'] . "</span> doados</p>
                            <p>R$" . $postagem['meta_de_arrecadacao'] . " de alvo</p>
                        </section>";

                    
                    
                }
            ?>
        </section>
        
    </main>

    <section id="modal-doacao" class="edit-modal-main">
        <div class="modal-changes-infos" id="change-nome">
            <div class="modal-header-row">
                <h1>Insira o valor da doação</h1>
                <span id="fechar-modal" class="material-symbols-outlined button-close">close</span>
            </div>
            <form class="modal-form" action="exe/doacao_exe.php" method="POST">
                <input id='id-projeto' name='id-projeto' style='visibility:hidden; display:none;' type='text' value='<?=$idPost?>'>
                <input type="number" name="valor-doacao" placeholder="R$">
                <button type="submit">Doar</button>
            </form>
        </div>
    </section>
    <footer>

    </footer>
    <script src="js/script.js"></script>
</body>
</html>