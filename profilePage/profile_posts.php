<?php
        require('../db_conection/conexao.php');
        require('exe/verificarInfos.php');

        session_start();

        if(!isset($_SESSION['email'])) {
            header ("Location: ../login/login.php");
        }

        $emailUsu = $_SESSION['email'];
        $imagemUsu = $_SESSION['imagem'];
        $nomeUsu = $_SESSION['nome'];

        try{

            $sql = "SELECT telefone, cidade, bio, formacao, apelido, tipo_conta from Usuario WHERE email = '$emailUsu'";
            $result = $conn->query($sql);
            $row = $result->fetch_assoc();

            $telefoneUsu = $row['telefone'];
            $cidadeUsu = $row['cidade'];
            $bioUsu = $row['bio'];
            $formacaoUsu = $row['formacao'];
            $apelidoUsu = $row['apelido'];
            $tipoUsu = $row['tipo_conta'];


        } catch(Exception $e){

            echo "<h1>Erro ao recuperar dados do banco</h1>";
            die('Tente novamente...');

        }

        function validate_data($variavel_para_teste, $id_botao){
            if($variavel_para_teste != null){
                echo"<p class='info-user'>$variavel_para_teste<button id='$id_botao' class='set-button' ><span class='material-symbols-outlined'>edit</span></button></p>";
            }else{
                echo"<p class='info-user'>$variavel_para_teste<button id='$id_botao' class='non-button' ><span class='material-symbols-outlined'>edit</span> Adicione uma informação</button></p>";
            }
        }


        $email = $_SESSION['email'];
        $imagem = $_SESSION['imagem'];

        $sql = "SELECT * FROM Postagens WHERE fk_email = '$email' ORDER BY id DESC";
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
    <link rel="shortcut icon" href="../img/favicon.png" type="image/x-icon">
    <link rel="stylesheet" href="../edit-page/css/style.css">
    <link rel="stylesheet" href="../cabeçalho/cabecalho.css">
    <title><?= $nomeUsu ?> (Editar Perfil) | Got an Idea💡</title>
</head>
<body>
    <!-- NOTIFICACAO -->
    <div id="fundo_para_notificacao" class="hide">
        <div id="notificacao_div">
            <p id="mensagem_notificacao"></p>
        </div>
    </div>

    <section id="modal-alterarnome" class="edit-modal-main">
        <div class="modal-changes-infos" id="change-nome">
            <div class="modal-header-row">
                <h1>Alterar nome:</h1>
                <span id="fechar-modal" class="material-symbols-outlined button-close">close</span>
            </div>
            <form class="modal-form" action="exe/edit_Page_exe.php" method="POST">
                <input type="text" name="alterar-nome" placeholder="Digite seu nome: ">
                <button type="submit">Salvar</button>
            </form>
        </div>
    </section>

    <section id="modal-alterartelefone" class="edit-modal-main">
        <div class="modal-changes-infos" id="change-nome">
            <div class="modal-header-row">
                <h1>Alterar telefone:</h1>
                <span id="fechar-modal" class="material-symbols-outlined button-close">close</span>
            </div>
            <form class="modal-form" action="exe/edit_Page_exe.php" method="POST">
                <input id="input-telefone" type="tel" name="alterar-telefone" placeholder="Digite seu telefone: ">
                <button type="submit">Salvar</button>
            </form>
        </div>
    </section>

    <section id="modal-alterarcidade" class="edit-modal-main">
        <div class="modal-changes-infos" id="change-nome">
            <div class="modal-header-row">
                <h1>Alterar cidade:</h1>
                <span id="fechar-modal" class="material-symbols-outlined button-close">close</span>
            </div>
            <form class="modal-form" action="exe/edit_Page_exe.php" method="POST">
                <input type="text" name="alterar-cidade" placeholder="Digite sua cidade: ">
                <button type="submit">Salvar</button>
            </form>
        </div>
    </section>

    <section id="modal-alterarformacao" class="edit-modal-main">
        <div class="modal-changes-infos" id="change-nome">
            <div class="modal-header-row">
                <h1>Alterar formação:</h1>
                <span id="fechar-modal" class="material-symbols-outlined button-close">close</span>
            </div>
            <form class="modal-form" action="exe/edit_Page_exe.php" method="POST">
                <input type="text" name="alterar-formacao" placeholder="Digite sua formação: ">
                <button type="submit">Salvar</button>
            </form>
        </div>
    </section>

    <?php require("../cabeçalho/cabecalho.php"); ?>

    <main>
  
        <section class="sec-esquerda">     
                <div class="centerimg">
                    <div class="div-profileimage">
                        <img class='imagem-perfil' src='data:image;base64,<?=$imagemUsu?>' alt= 'Foto do Perfil'>
                        <input type="file" class="input-imagem" name="arquivo">
                    </div>
                </div>

                <div class="sobre-divesquerda">
                    <h2>Sobre <span class="material-symbols-outlined">arrow_forward_ios</span></h2>
                    <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Aperiam, eum. Porro quis blanditiis saepe magni minima culpa tempore esse maxime odio dolorum pariatur, totam aspernatur quam velit necessitatibus incidunt dicta!</p>
                </div>
        </section>

        <section class="sec-direita">

            <div class="div-direitamain">
                <div class="main-infos">
                    <h1><?= $nomeUsu ?></h1>
                    <button id="botao-alterarnome" class="save-profile"><span class="material-symbols-outlined">
                        edit
                        </span>Alterar nome</button>
                    
                </div>
                <h2 class="select-user">@<?=$apelidoUsu?> | <?=obterTipoConta($tipoUsu);?></h2>
                <!-- Ideia enquanto não foi resolvido o que faremos com os tipos de conta, resolvi colocar o "@" (apelido) -->
                <!-- Código retirado: <h2 class="select-user">@Colaborador(a)</h2> -->
            </div>

            <div class="buttons-user">
                <button><a href="../edit-page/edit_Page.php" style="color: white;">Editar Perfil</a></button>
                <!-- <a href="#">Reportar usuário</a> -->
            </div>

            <div>
                <ul class="menu">
                    <li class="selected"><a href="#"><span class="material-symbols-outlined">emoji_objects</span>Ideias/Projetos</a></li>
                    <li><a href="index.php"><span class="material-symbols-outlined">person</span>Informações</a></li>
                </ul>
                
                <article>
                
                    <section id="tab1" class="sec-article active tab_opened sec-article-idea">
                    <?php foreach ($postagens as $post) : ?>
                        <div class="div-idea">
                            <div class="infos-user">
                                <div class="infos-user-row">
                                    <div class="img-user-div">
                                        <img class='img-user' src='data:image;base64,<?=$imagemUsu?>' alt= 'Foto do dono da postagem'>
                                    </div>
                                    <div class="infos-user-names">
                                        <h1 class="nome-user"><?= $nomeUsu ?></h1>
                                        <h2 class="persona-user">Idealizador | <?= verificarTipo($post['fk_idPost'])?></h2>
                                    </div>
                                </div>
                            </div>
                            <div class="infos-ideia">
                                <h1 class="titulo-ideia"><?= $post['titulo']; ?></h1>
                                <p class="desc-ideia"><?= $post['descricao']; ?></p>
                            </div>
                        </div>
                    <?php endforeach; ?>
                    </section>
                
                
                </article>
                
            </div>
        </section>
    </main>
    
    <footer>
    </footer>
    <script src="js/script.js"></script>
    <script src="../register/js/notificacao.js"></script>
    <script src="../register/js/verificar_mensagem.js"></script>
        <script>
            verificar_mensagem(<?php if(isset($_GET['msg'])){echo $_GET['msg'];}?>);
            alert(<?=$_GET['msg']?>);
        </script>
</body>
</html>