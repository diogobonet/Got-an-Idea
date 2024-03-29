<?php
    require('../db_conection/conexao.php');
    require('exe/verificarInfos.php');

    session_start();
    
    if(!isset($_SESSION['email'])) {
        header ("Location: ../login/login.php");
    }
?>
<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:opsz,wght,FILL,GRAD@20..48,100..700,0..1,-50..200" />
    <title>Registro | got an Idea💡</title>
    <style>
        @import url('https://fonts.googleapis.com/css2?family=Poppins&display=swap');
        /* font-family: 'Poppins', sans-serif; */
        @font-face {
        font-family: Talisso;
        src: url(../fonts/tussilago_rg.otf);} 
        @font-face {
        font-family: Helga;
        src: url(../fonts/Helga.ttf);} 
        * {
            margin: 0;
            padding: 0;
        }
        body {
            background-color: #0A0A0D;
            color: white;
            font-family: 'Poppins', sans-serif;
        }
        header {
            padding: 25px;
            margin-left: 10px;
        }
        a {
            text-decoration: none;
            color: white;
        }
        
        header a:hover {
            color: rgb(189, 185, 185)
        }
        .material-symbols-outlined {
          font-variation-settings:
          'FILL' 0,
          'wght' 700,
          'GRAD' 0,
          'opsz' 48
          
        }
        .container {
            display: flex;
            flex-direction: column;
            align-items: center;
            justify-content: center;
        }
        form {
            display: flex;
            flex-direction: column;
            justify-content: center;
            align-items: center;
            width: 100%; /* Define a largura do formulário */
            margin: 0; /* Remove a margem padrão */
            min-height: 300px; /* Define uma altura mínima para o formulário */
        }
        input {
            background-color: #2D2D2E;
            resize: none;
            font-family: "Poppins";
            padding: 10px;
            border-radius: 10px;
            border: none;
            width: 35vw;
            color: white;
            margin-bottom: 5px;
        }
        button {
            padding: 10px;
            margin-top: 20px;
            width: 50%;
            font-family: "Poppins";
            background-color: #0583f2;
            color: white;
            border: none;
            border-radius: 20px;
            cursor: pointer;
            display: flex;
            justify-content: center;
            align-items: center;
        }
        button:hover {
            background-color: #0583f3;
        }
        textarea {
            background-color: #2D2D2E;
            resize: none;
            font-family: "Poppins";
            padding: 10px;
            border-radius: 10px;
            border: none;
            width: 35vw;
            color: white;
        }
        </style>
</head>
<body>
    <header>
        <!-- <a href="registro.php">
            <span class="material-symbols-outlined">
                arrow_back
                </span>
        </a> -->
    </header>
    <section class="container">
            <?php
                $id_Post = $_POST['id_Post'];
                $sql = "SELECT * FROM Postagens WHERE id = '$id_Post'";
                $result = $conn->query($sql);
                $postagens = $result->fetch_all(MYSQLI_ASSOC);
            ?>
            <?php foreach ($postagens as $post) { ?>
                <h1>Aletração de <?= verificarTipo($post['fk_idPost'])?></h1>
                <div class="div-center">
                    <form action="exe/form_edit_ideia_exe.php" method="POST">
                        <input type="text" name="alterar-titulo" placeholder="<?= $post['titulo']; ?>" value="<?= $post['titulo']; ?>">
                        <textarea name="alterar-descricao" placeholder="<?= $post['descricao']; ?>"><?= $post['descricao']; ?></textarea>
                        <input type="hidden" name="id_Post" value="<?= $id_Post ?>">
                        <button type="submit">Salvar</button>
                    </form>
                </div>
            <?php } ?>
    </section>
</body>
</html>