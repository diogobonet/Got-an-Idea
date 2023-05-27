<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:opsz,wght,FILL,GRAD@20..48,100..700,0..1,-50..200" />
    <link rel='stylesheet' href='css/tipo_registro.css'/>
    <title>Registro | got an Idea💡</title>
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