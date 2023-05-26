<?php
    function verificarUser(int $valor):string{
        if($valor == 1){
            return 'Ideia';
        } else if($valor == 2){
            return 'Projeto';
        }
        return 'Erro 404';
    }
?>