<?php
   require('../../db_conection/conexao.php');

   $email = $_POST['email'];
   $senha = md5($_POST['password']);

   $sql = "SELECT email, senha, nome, imagem FROM Usuario WHERE email = '$email' and senha = '$senha'";

   if ($conn->query($sql)) {

      $result = $conn->query($sql);
      $row = $result->fetch_assoc();

      if($row['email'] == "$email" && $row['senha'] == "$senha"){

         session_start();

         $_SESSION['email'] = $row['email'];
         $_SESSION['nome'] = $row['nome'];
         $_SESSION['imagem'] = base64_encode($row['imagem']);
         // Transformar mediumblob em string


         header('Location: ../../home/home.php');

      } else {

         header('Location: ../login.php?erro=2');
         
      }
   }

?>