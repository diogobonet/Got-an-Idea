<?php
   require('../../db_conection/conexao.php');

   $email = $_POST['email'];
   $senha = md5($_POST['password']);

<<<<<<< HEAD
   $sql = "SELECT email, senha, nome, imagem FROM Usuario WHERE email = '$email' and senha = '$senha'";

   if ($conn->query($sql)) {

=======
   $sql = "SELECT email, senha FROM Usuario WHERE email = '$email' and senha = '$senha'";

   if ($conn->query($sql)) {
>>>>>>> 063fce8d189519cebdfa89104b76ebd5480a468f
      $result = $conn->query($sql);
      $row = $result->fetch_assoc();

      if($row['email'] == "$email" && $row['senha'] == "$senha"){
<<<<<<< HEAD

         session_start();

         $_SESSION['email'] = $row['email'];
         $_SESSION['nome'] = $row['nome'];
         $_SESSION['imagem'] = $row['imagem'];

         header('Location: ../../home/home.php');

      } else {

         header('Location: ../login.php?erro=2');
         
=======
         session_start();
         $_SESSION['email'] = $row['email'];
         header('Location: ../../profilePage/index.html');
      } else {
         header('Location: ../login.php?erro=2');
>>>>>>> 063fce8d189519cebdfa89104b76ebd5480a468f
      }
   }

?>