function verificar_mensagem(msg){
    if(msg == 0){
        ativar_notificacao('Conta cadastrada com sucesso!', erro_unico=true);
    } else if(msg == 1){
        ativar_notificacao('Hmm, o que você está fazendo hein? 😎', erro_unico=true);
    } else if(msg == 2){
        ativar_notificacao('Para de ficar testando coisa aí o curioso', erro_unico=true);
    } else if(msg == "bderror"){
        ativar_notificacao('Houve um problema ao apagar sua conta, Recarregue a página e tente novamente por favor.', erro_unico=true);
    } else if(msg == "contaapagada"){
        ativar_notificacao('Espero que se arrependa de ter apagado a sua conta... 🥺', erro_unico=true);
    } else{
        return;
    }
}