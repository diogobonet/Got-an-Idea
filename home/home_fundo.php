<?php
    require('../db_conection/conexao.php');
    require('exe/verificarInfos.php'); // Traz o verificarUser();
    session_start();

    if(!isset($_SESSION['logado'])) {
        header ("Location: ../login/login.php");
    }

    $email = $_SESSION['email'];
    $imagem = $_SESSION['imagem'];

    $sql = "SELECT Postagens.*, usuario.imagem, usuario.apelido, usuario.nome, usuario.tipo_conta FROM Postagens 
    INNER JOIN usuario ON Postagens.fk_email = usuario.email 
    INNER JOIN tipospostagem ON Postagens.fk_idPost = tipospostagem.idPost ORDER BY Id DESC ";
    try{
        $result = $conn->query($sql);
        $postagens = $result->fetch_all(MYSQLI_ASSOC); 
    } catch(Exception $e){
        echo"<h1 style='color:red; font-size:45px;'>Erro:</h1>";
        echo"<h1 style='color:white; font-size:35px;'>" . $e->getMessage() . "</h1>";
    }
?>
<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:opsz,wght,FILL,GRAD@20..48,100..700,0..1,-50..200" />
    <link rel="shortcut icon" href="img/lampada gotanidea.png" type="image/x-icon">
    <title>Página Inicial | got an Idea💡</title>
    <link href="css/style.css" rel="stylesheet">
    <link rel="stylesheet" href="../cabeçalho/cabecalho.css">
    <link rel='stylesheet' href='css/fundo.css'>
</head>
<body>
    <div id='esfera_fundo_esquerda'></div>
    <div id='esfera_fundo_direita_abaixo'></div>
    <div id="fundo_para_notificacao" class="hide">
        <div id="notificacao_div">
            <p id="mensagem_notificacao"></p>
        </div>
    </div>

    <!-- DIV INTEIRA DO MODAL -->
    <!-- MODAL IDEIA -->
    <div id="modal" class="modal">
                <div class="modal-conteudo">
                    <div class="modal-header">
                        <h1 id='modal-titulo'></h1>
                        <span id="close_button_cadastro_ideia" class="material-symbols-outlined close_button" onclick="click">close</span>
                    </div>
                    
                    <!-- FORMULARIO MODAL -->
                    <form id='form-modal' class="modal-idea" action="exe/cadastrarPostagem.php" method='POST'>
                        <input id='inputTipoPostagem' name='input-tipo-postagem' style='visibility:hidden; display:none;' type='text'>

                        <div class="modal-idea-row">
                            <input id='input_titulo' name='input-titulo-cadastro' class="input-title" type="text" placeholder="Titulo...">
                            <select id="meu-select" name="input-select-opcao">
                                <option value="Categoria">Categoria</option>
                                <option value="Tecnologia">Ciência e Tecnologia</option>
                                <option value="Culinaria">Culinária</option>
                                <option value="Engenharia">Engenharia</option>
                                <option value="Saúde e Bem-estar">Saúde e Bem-estar</option>
                                <option value="Automobilística">Automobilística</option>
                                <option value="Educação">Educação</option>
                                <option value="Negócios e Empreendedorismo">Negócios e Empreendedorismo</option>
                                <option value="Finanças e Investimentos">Finanças e Investimentos</option>
                            </select>
                        </div>

                        <div class="div-donationinput"><input id='input_doacao' name='input-meta' class="input-title" type="number" placeholder="Digite o valor da meta ser arrecadada"></div>

                        <div class="div-textarea">
                            <textarea id='input_descricao' placeholder="Descrição..." name="input-descricao-cadastro" cols="30" rows="10"></textarea>
                        </div>

                        <div class="div-save-button">
                            <section id='botao_submit' onclick='verificarInputsPostagem()' class="save-button">Salvar</section>
                        </div>
                    </form>
                </div>
        </div>

    <?php
    require("../cabeçalho/cabecalho.php")
    ?>

    <main>
        <!-- DIV DA PARTE DA CRIAÇÃO DA POSTAGEM E DAS POSTAGENS -->
        <section class="div-main">

        <div class="div-postagem">
            <div class="select-div">
                <a class="postagem-select active" id="select-ideia" href="#">Ideia</a>
                <a class="postagem-select" id="select-projeto" href="#">Projeto</a>
            </div>

            <div class="cadastro-div">
                <p>Você tem uma ideia?</p>
                <button id="btn-cadastrar-ideia">Cadastrar ideia</button>
            </div>

            <div class="cadastro-div" style="display:none;">
                <p>Você tem um projeto?</p>
                <button id="btn-cadastrar-projeto">Cadastrar projeto</button>
            </div>
        </div>

        <?php foreach ($postagens as $post) { ?>
            <div class="div-idea">
                <div class="infos-user">
                    <div class="infos-user-row">
                        <div class="img-user-div">
                            <?php echo "<img class='img-user' src='data:image;base64,".base64_encode($post['imagem'])."' alt= 'Foto do dono da postagem'>"; ?>
                        </div>
                        <div class="infos-user-names">
                            <h1 class="nome-user"><?= $post['nome']; ?></h1>
                            <h2 class="persona-user"><?= obterTipoConta($post['tipo_conta'])?> | <?= verificarTipo($post['fk_idPost'])?></h2>
                        </div>
                    </div>
                    <div class="botao-editar-ideia">
                        <form name="form" action="../ver-detalhes/index.php" method="POST">
                            <input style='display:none; visibility:hidden;'name='id-post' type='text' value='<?=$post['id']?>'>
                            <button>Ver Detalhes</button>
                        </form>
                    </div>
                </div>
                <div class="infos-ideia">
                    <h1 class="titulo-ideia"><?= $post['titulo']; ?></h1>
                    <p class="desc-ideia"><?= $post['descricao']; ?></p>
                </div>
            </div>
            
        <?php } ?>
        </section>

        <section class="best-idea">
            <h1 class="title-best">Melhores Ideias</h1>
            <div class="melhor-ideia">
                <div class="div-flex-ideia">
                    <img src="img/incendio.png" alt="Fogo">
                    <h1>Titulo Ideia</h1>
                </div>
                <p>Lorem ipsum dolor sit amet consectetur adipisicing elit.</p>
            </div>

            <div class="melhor-ideia">
                <div class="div-flex-ideia">
                    <img src="img/incendio.png" alt="Fogo">
                    <h1>Titulo Ideia</h1>
                </div>
                <p>Lorem ipsum dolor sit amet consectetur adipisicing elit.</p>
            </div>

            <div class="melhor-ideia">
                <div class="div-flex-ideia">
                    <img src="img/incendio.png" alt="Fogo">
                    <h1>Titulo Ideia</h1>
                </div>
                <p>Lorem ipsum dolor sit amet consectetur adipisicing elit.</p>
            </div>
        </section>
        
        <script src='js/notificacao.js'></script>
        <script src="js/script.js"></script>
        <script src='js/verificadorForm.js'></script>
    </main>  
    
</body>
</html>