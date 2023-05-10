<?php
    require('../db_conection/conexao.php');
    session_start();

    $email = $_SESSION['email'];

    $sql = "SELECT * FROM Ideia";
    try{
        $conn->query($sql);
        $result = $conn->query($sql);
        $ideias = $result->fetch_all(MYSQLI_ASSOC); 
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
</head>
<body>
    <div id="modal" class="modal">
                <div class="modal-conteudo">
                    <div class="modal-header">
                        <h1>Cadastre sua ideia</h1>
                        <span id="close_button_cadastro_ideia" class="material-symbols-outlined close_button" onclick="click">close</span>
                    </div>
                    
                    <form class="modal-idea" action="exe/cadastrar_ideiaProjeto.php" method='POST'>
                        <div class="modal-idea-row">
                            <input name='input-titulo-cadastro' class="input-title" type="text" placeholder="Titulo...">
                            <select id="meu-select" name="input-select-opcao">
                                <option value="opcao1">Categoria</option>
                                <option value="opcao2">Tecnologia</option>
                                <option value="opcao3">Culinaria</option>
                                <option value="opcao4">Engenharia</option>
                            </select>
                        </div>
                        <div class="div-textarea"><textarea placeholder="Descrição..." name="input-descricao-cadastro" cols="30" rows="10"></textarea></div>
                        <div class="div-save-button">
                            
                            <input type='submit' value='Salvar' class="save-button">
                            
                        </div>
                    </form>
                </div>
        </div>
    <header>
        <nav>
            <div class="img-wrapper">
                <img class="logo-header" src="img/logo.png" alt="Logo do Header">
            </div>
                <input placeholder="Pesquisar" type="search" name="" id="">
                <a href="">Encontre ideias</a>
                <a href="">Conectado</a>
                <a href="">Ranking</a>
                <div class="div-userimg">
                <img class="user-img" src="img/messi.jpeg" alt="Imagem do usuário">
        </nav>
    </header>

    <main>
        <section class="div-main">
            <div class="div-postagem">
                <div class="select-div">
                    <a class="postagem-select active" id="select-ideia" href="#">Ideia</a>
                    <a class="postagem-select" id="select-projeto" href="#">Projeto</a>
                </div>
                <div class="cadastro-div">
                    <p>Você tem uma ideia?</p>
                    <button id="abrir-modal">Cadastrar Ideia</button>
                </div>
            </div>
            <?php foreach($ideias as $ideia) : ?>
                <div class="div-idea">
                    <div class="infos-user">
                        <div class="img-user-div"><img class="img-user" src="img/messi.jpeg" alt="Foto de Perfil"></div>
                        <div class="infos-user-names">
                            <h1 class="nome-user"><?php echo $ideia['nome']; ?></h1>
                            <h2 class="persona-user">Idealizador</h2>
                        </div>
                    </div>
                    <div class="infos-ideia">
                        <h1 class="titulo-ideia"><?=$ideia['titulo']?></h1>
                        <p class="desc-ideia"><?=$ideia['descricao']?></p>
                    </div>
                </div>
            <?php endforeach; ?>


            <div class="div-idea">
                <div class="infos-user">
                    <div class="img-user-div"><img class="img-user" src="img/messi.jpeg" alt="Foto de Perfil"></div>
                    <div class="infos-user-names">
                        <h1 class="nome-user">Messi</h1>
                        <h2 class="persona-user">Idealizador</h2>
                    </div>
                </div>
                <div class="infos-ideia">
                    <h1 class="titulo-ideia">Um time de futebol bom</h1>
                    <p class="desc-ideia">Lorem ipsum, dolor sit amet consectetur adipisicing elit. Minus magni maiores hic quibusdam iste quas et fugiat delectus, dicta voluptate nisi adipisci. Asperiores sunt necessitatibus illum, incidunt inventore aperiam suscipit! Lorem ipsum dolor sit amet consectetur, adipisicing elit. Odio veritatis dicta iusto a deleniti culpa optio animi ullam, amet repellendus distinctio sed ipsum nisi deserunt autem provident non quam officia!</p>
                </div>

                <a href="../edit-page/edit_Page.php">EAEE</a>
            </div>    

            
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

        
        
        <script src="js/script.js"></script>
        <script src="js/modal-idea.js"></script>
    </main>  
    
</body>
</html>