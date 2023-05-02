<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/style2.css">
    <title>Registro | got an Idea💡</title>
</head>
<body>

    <div id="fundo_para_notificacao" class="hide">
        <div id="notificacao_div">
            <p id="mensagem_notificacao"></p>
        </div>
    </div>

    <div class='div-form'>
        <div class='div-form-esquerda'>
            <img class='logo' src="img/logo.png">
        </div>
        <div class='div-form-direita'>
            <h1>Criar uma conta</h1>
            <form id='form_registro' action='exe/register_intoDB.php' class="form" method="POST">
                <label>Nome<input name='nome_input' placeholder='Exemplo' class= 'info-nome form_input' type="text"></label>
                <label>Sobrenome<input name='sobrenome_input' placeholder='Exemplo' class= 'info-sobrenome form_input' type="text"></label>
                <label>Email<input name='email_input' placeholder='exemplo@ex.com' class= 'info-email form_input' type="text"></label>
                <label>Apelido<input name='apelido_input' placeholder='ExemploEx' class= 'info-apelido form_input' type="text"></label>
                <label>Senha<input name='senha_input' placeholder='Senha' class= 'info-senha form_input' type="password"></label>
                <label>Confirmar<input name='confirmar_input' placeholder='Senha' class= 'info-confirmar form_input' type="password"></label>
            </form>
            <div class="div-button"><button id="botao_submit" class="button">REGISTRAR</button></div>
            <p>Já possuí uma conta? <a href="../login/login2.html">Entre aqui</a></p>
        </div>
    </div>
    <script src='js/notificacao.js'></script>
    <script src="js/validacao_inputs.js"></script>
    <script src="js/verificar_erros.js"></script>
    <script>
        verificar_erros(<?php if(isset($_GET['erro'])){echo $_GET['erro'];}?>); // Caso o php receba um erro, será enviado para o javascript ativar a notificacao.
    </script>
</body>
</html>