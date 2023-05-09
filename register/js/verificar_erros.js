function verificar_erros(erro){
    if(erro == 0){
        ativar_notificacao('Email já cadastrado... Por favor tente novamente!', erro_unico=true);
    } else if(erro == 1){
        ativar_notificacao('Apelido já utilizado... Por favor tente novamente!', erro_unico=true);
    } else if(erro == 2){
        ativar_notificacao('Email ou senha incorretos... Por favor tente novamente!', erro_unico=true);
    } else{
        return;
    }
}