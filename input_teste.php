<?php
    require('db_conection/conexao.php');

    if(isset($_FILES) && $_FILES != []){
        if(file_exists($_FILES['image']['tmp_name'])){
           $file = addslashes(file_get_contents($_FILES['image']['tmp_name']));
           $sql = "UPDATE Usuario SET imagem = '$file' WHERE email = 'gabriel@gmail.com'";
           $conn->query($sql);
        }
    }
    var_dump($_FILES);
?>
<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Input</title>
</head>
<body style='width:100vw; height:100vh; display:flex; flex-direction:column; justify-content:center; align-items:center;'>
    <form style='width:80%; height:50%; display:flex; justify-content:center; align-items:center; background:gray;' action='input_teste.php' method='POST' enctype="multipart/form-data">
        <input type='file' name='image'>
        <br>
        <button style='width:100px; height:100px;' width='100' height='100' type='submit'>Enviar</button>
        <?php echo "<img id='profile_img' src='data:image;base64,".base64_encode($_SESSION['imagem'])."' alt= 'Foto do usuário'>"; ?>
    </form>
</body>
</html>