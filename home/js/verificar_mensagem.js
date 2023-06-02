function verificar_mensagem(msg) {
    if (msg == "sucesso") {
        ativar_notificacao("Operação bem sucedida!", true, false);
    } else if (msg == "valor_errado") {
        ativar_notificacao("Valor de doação inválido...", true, false);
    }
}