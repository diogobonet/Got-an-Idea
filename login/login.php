<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/style.css">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:opsz,wght,FILL,GRAD@48,400,0,0" />
    <link rel="shortcut icon" href="../img/favicon.png" type="image/x-icon">
    <title>got an Idea💡 | Login</title>
</head>
<body>
    <div id="fundo_para_notificacao" class="hide">
        <div id="notificacao_div">
            <p id="mensagem_notificacao"></p>
        </div>
    </div>
    <header>
    </header>
    
    <main>
        <div class="container-master">
            <div class="container1">
            <div class="imagem">
                <!--<img class="logo-header" src="../home/img/logo.png" alt="Logo Got an Idea">-->
            </div>
            <div class="container2">
                <div class="login-box">
                    <h2>Login</h2>
                    <form class="form1" action='exe/login_exe.php' class="form1" method="POST">
                        <div class="input-group">
                            <input type="text" id="email" name="email" required>
                            <span>Email</span>
                        </div>
                        <div class="input-group">
                            <input type="password" id="password" name="password" required>
                            <span>Senha</span>
                        </div>
                        <div class="links">
                            <a href="#">Esqueci a senha</a>
                            <a href="../register/registro.php">Cadastrar-se</a>
                        </div>
                        <button type="submit">Entrar</button>
                    </form>
                </div>
            </div>
            <div class="line line-1">
                <div class="wave wave-1" style="background-image: url(img/1.png);"></div>
            </div>
            <div class="line line-2">
                <div class="wave wave-2" style="background-image: url(img/2.png);"></div>
            </div>
            <div class="line line-3">
                <div class="wave wave-3" style="background-image: url(img/3.png);"></div>
            </div>
        </div>
        <script src='../register/js/notificacao.js'></script>
        <script src="../register/js/verificar_erros.js"></script>
        <script src="../register/js/verificar_mensagem.js"></script>
        <script>
            verificar_erros(<?php if(isset($_GET['erro'])){echo $_GET['erro'];}?>); // Caso o php receba um erro, será enviado para o javascript ativar a notificacao.
            verificar_mensagem(<?php if(isset($_GET['msg'])){echo $_GET['msg'];}?>);
        </script>
    </main>

    <footer>

    </footer>

</body>
</html>