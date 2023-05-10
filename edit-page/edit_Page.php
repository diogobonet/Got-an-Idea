<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:opsz,wght,FILL,GRAD@20..48,100..700,0..1,-50..200" />
    <link rel="shortcut icon" href="img/lampada gotanidea.png" type="image/x-icon">
    <link rel="stylesheet" href="./css/style.css">
    <title>Diogo Bonet | Got an Idea💡</title>
</head>
<body>
    <?php
        session_start();
        $email = $_SESSION['email'];
    ?>
    <header>
        <div class="img-wrapper">
            <img class="logo-header" src="img/logo.png" alt="Logo do Header">
        </div>
           
                <input placeholder="Pesquisar" type="search" name="" id="">
                <a href="">Encontre ideias</a>
                <a href="">Conectado</a>
                <a href="">Ranking</a>
                <div class="div-userimg">
                    <img class="user-img" src="img/messi.jpeg" alt="Imagem do usuário">
    </header>

    <main>
        <section class="sec-esquerda">     
                <div class="centerimg">
                    <div class="div-profileimage">
                        <img class="imagem-perfil" src="img/messi.jpeg" alt="Imagem de Perfil">
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
                    <h1>Diogo Bonet</h1>
                    <button class="save-profile"><span class="material-symbols-outlined">
                        edit
                        </span>Alterar nome</button>
                </div>
                <h2 class="select-user">Colaborador(a)</h2>
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
                            <p class="info-user">gotanidea@contato.com</p>
                            <p class="info-user">(41)98888-8888  <button class="set-button"><span class="material-symbols-outlined">edit</span></button></p> 
                            <p class="info-user"><button class="non-button">
                                <span class="material-symbols-outlined">edit</span> Adicione uma informação
                            </button></p>
                            <p class="info-user">
                                    <button class="non-button">
                                        <span class="material-symbols-outlined">edit</span> Adicione uma informação
                                    </button>
                            </p>
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
            <form action="../deletarProfile/deletarprofile_exe.php" method="post">
                  <button id="botao-apagar-conta" name="botao-apagar-conta" type="submit">Apagar minha conta</button>
                  <button id="botao-salvar-conta" name="botao-salvar-conta" type="submit">Salvar</button>
            </form>
            </section>
    </footer>
    <script src="js/script.js"></script>
    <script src="../register/js/verificar_mensagem.js"></script>
        <script>
            verificar_mensagem(<?php if(isset($_GET['msg'])){echo $_GET['msg'];}?>);
        </script>
</body>
</html>