<?php
        require('../db_conection/conexao.php');

        session_start();

        if(!isset($_SESSION['email'])) {
            header ("Location: ../login/login.php");
        }
        

        $emailUsu = $_SESSION['email'];
        $imagemUsu = $_SESSION['imagem'];
        $nomeUsu = $_SESSION['nome'];
        $imagem = $_SESSION['imagem'];

        try{

            $sql = "SELECT telefone, cidade, bio, formacao, apelido from Usuario WHERE email = '$emailUsu'";
            $result = $conn->query($sql);
            $row = $result->fetch_assoc();

            $telefoneUsu = $row['telefone'];
            $cidadeUsu = $row['cidade'];
            $bioUsu = $row['bio'];
            $formacaoUsu = $row['formacao'];
            $apelidoUsu = $row['apelido'];

        } catch(Exception $e){

            echo "<h1>Erro ao recuperar dados do banco</h1>";
            die('Tente novamente...');

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
    <link rel="stylesheet" href="./css/style.css">
    <link rel="stylesheet" href="../cabeçalho/cabecalho.css">
    <title><?= $nomeUsu ?> | Got an Idea💡</title>
</head>
<body>
    <?php
    require("../cabeçalho/cabecalho.php")
    ?>

    <main>
        <section class="sec-esquerda">     
                <div class="centerimg">
                    <div class="div-profileimage">
                    <?php echo "<img class='imagem-perfil' src='data:image;base64,$imagemUsu' alt= 'Foto do Perfil'>"; ?>
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
                    <button class="save-profile"><span class="material-symbols-outlined">bookmark</span>Salvar perfil</button>
                </div>
                <h2 class="select-user">@<?=$apelidoUsu?></h2>
                <!-- Ideia enquanto não foi resolvido o que faremos com os tipos de conta, resolvi colocar o "@" (apelido) -->
                <!-- Código retirado: <h2 class="select-user">@Colaborador(a)</h2> -->
            </div>

            <div class="buttons-user">
                <button><a href="../edit-page/edit_Page.php" style="color: white;">Editar Perfil</a></button>
                <!-- <a href="#">Reportar usuário</a> -->
            </div>

            <div>
                <ul class="menu">
                    <li><a onclick="open_infos()" href="#"><span class="material-symbols-outlined">person</span>Informações</a></li>
                    <li><a onclick="open_ideas()" href="#"><span class="material-symbols-outlined">emoji_objects</span>Ideias</a></li>
                </ul>
                
                <article>
                
                    <section id="tab1" class="sec-article active tab_opened">
                        <div class="sec-article-esquerda">
                            <p class="">Email:</p>
                            <p class="">Celular:</p>
                            <p class="">Cidade:</p>
                            <p class="">Formação:</p>
                        </div>

                        <div class="sec-article-direita">
                            <p class="info-user"><?=$emailUsu?></p>
                            <p class="info-user"><?php echo"$telefoneUsu" ?>
                            <p class="info-user"><?php echo"$cidadeUsu" ?></p>
                            <p class="info-user"><?php echo"$formacaoUsu"?></p>
                        </div>
                    
                    </section>
                
                    <section id="tab2" class="sec-article ideas tab_closed">
                        <div>
                            <h1>Lampada Quebrada</h1>
                            <p class="idea-desc">Lorem ipsum dolor sit amet consectetur adipisicing elit. Sequi, voluptates unde quasi iusto corporis esse suscipit quae, illo eaque itaque quia assumenda impedit est aut quo delectus dolorem porro amet.</p>
                            <button>Detalhes</button>
                        </div>

                        <div>
                            <h1>Olha a pedra</h1>
                            <p class="idea-desc">Lorem ipsum dolor sit amet consectetur, adipisicing elit. Quos dicta nisi ipsum ex consectetur reprehenderit fuga, nostrum, qui sapiente tenetur quod omnis modi vitae tempora magnam asperiores dolore illum! Quo?</p>

                            <button>Detalhes</button>
                        </div>

                    </section>
                
                </article>
            </div>
        </section>

    </main>

    <footer>
        <section class="section-buttons">
            <button id="botao-logout" class="botao-logout" onclick="redirecionar_para_logout()" name="" type="submit">Sair da conta</button>
        </section>
    </footer>
    <script src="js/control_tabs.js"></script>
    <script src="js/redirecionar.js"></script>
</body>
</html>