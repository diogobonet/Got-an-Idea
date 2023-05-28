<?php

    function pesquisar(mysqli $conexao, $variavel){
        if($variavel == 'Semfiltro'){header('location: home.php');}

        if(isset($variavel) && $variavel != NULL) {

            $filtro_pesquisa = $variavel;

            $sql = "SELECT Postagens.*, usuario.imagem, usuario.apelido, usuario.nome, usuario.tipo_conta FROM Postagens 
            INNER JOIN usuario ON Postagens.fk_email = usuario.email 
            INNER JOIN tipospostagem ON Postagens.fk_idPost = tipospostagem.idPost WHERE filtros = '$filtro_pesquisa' ORDER BY Id DESC ";

        } else {

            $sql = "SELECT Postagens.*, usuario.imagem, usuario.apelido, usuario.nome, usuario.tipo_conta FROM Postagens 
            INNER JOIN usuario ON Postagens.fk_email = usuario.email 
            INNER JOIN tipospostagem ON Postagens.fk_idPost = tipospostagem.idPost ORDER BY Id DESC ";

        }
        
        
        try{

            $result = $conexao->query($sql);
            $postagens = $result->fetch_all(MYSQLI_ASSOC); 

            if(sizeof($postagens) > 0){
                return $postagens;
            }
            return "nao-encontrado";

        } catch(Exception $e){

            echo"<h1 style='color:red; font-size:45px;'>Erro:</h1>";
            echo"<h1 style='color:white; font-size:35px;'>" . $e->getMessage() . "</h1>";
            
        }

    }

?>