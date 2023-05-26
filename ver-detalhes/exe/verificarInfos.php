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

    function enviarBarra($quantiaDoada, $metaDoacao):void{
        $porcentagem = round(($quantiaDoada/$metaDoacao)*100);
        if($porcentagem >= 100){$porcentagem = 100;}
        echo"
        <style>
            #doacao_barra{
                position:relative;
                width:70%;
                height: 30px;
                background-color: gray;
            }
            #doacao_barra::after{
                content: '';
                position:absolute;
                background-color: green;
                width: $porcentagem%;
                height: 30px;
                bottom: 0;
            }
            #doacao_barra::before{
                display:flex; justify-content: center; 
                content: '$porcentagem%';
                z-index: 100;
                position: absolute;
                width:100%; height:30px;
                bottom: 0;
            }
        </style>
        ";
    }
?>