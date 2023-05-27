<?php
    function verificarTipo(int $valor):string{
        if($valor == 1){
            return 'Ideia';
        } else if($valor == 2){
            return 'Projeto';
        }
        return 'Erro 404';
    }

    function obterTipoConta($tipoUsu) {
        if ($tipoUsu == 1) {
            return "Idealizador";
        } elseif ($tipoUsu == 2) {
            return "Colaborador";
        } elseif ($tipoUsu == 3) {
            return "Investidor";
        } elseif ($tipoUsu == 4) {
            return "Doador";
        } else {
            return "Idealizador";
        }
    }

?>