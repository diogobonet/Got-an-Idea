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
        select {
            padding: 10px;
            background-color: #0A0A0D;
            border: 1px solid gray;
            border-radius: 20px;
            width: 200%;
            font-family: "Poppins";
            color: white;
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
            <h1>Qual é o seu propósito?</h1>
                <div class="div-center">
                    <form action="exe/updatetypeconta.php" method="POST">
                        <select name="meu-select" id="select">
                            <option value="1">Idealizador 💡</option>
                            <option value="2">Colaborador 👥</option>
                            <option value="3">Investidor 🤑</option>
                            <option value="4">Doador 💰</option>
                        </select>
                        <button type="submit">Enviar</button>
                    </form>
                </div>
    </section>
</body>
</html>