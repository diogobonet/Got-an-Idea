var botao_submit = document.getElementById('botao_submit');

function validar_inputs(){

    let formulario = document.getElementById('form_registro');

    let nome = document.querySelector('.info-nome');
    let sobrenome = document.querySelector('.info-sobrenome');
    let apelido = document.querySelector('.info-apelido');
    let email = document.querySelector('.info-email');
    let senha = document.querySelector('.info-senha');
    let confirmar = document.querySelector('.info-confirmar');
    
    const regex_nome = /^[A-Z]{1}[a-z]{1,24}$/;
    const regex_senha = /^(?=.*[0-9])(?=.*[A-Z])(?=.*[\!\@\#\$\%\¨\&\*\(\)\<\>\"\']).{8,16}$/;
    const regex_email = /^\w{1,}\@\w{1,}\.\w{1,}(\.\w{1,})?$/
    const regex_apelido = /^[\w\_]{3,25}$/

    if(nome.value.length>0 && sobrenome.value.length>0 && apelido.value.length>0 && email.value.length>0 && senha.value.length>0){
        let string_erros = []; // Erros que serão colocados na notificação
        let acertos = 0;

        if(regex_nome.test(nome.value)){
            nome.classList.remove('input_errado');
            acertos+=1; /* com essa variavel será possível verificar se todas as condições foram atendidas */ 
        }else{
            nome.classList.add('input_errado');
            string_erros.push('Nome: entre 2&25 caracteres e começar com maiúscula');
        }
        
        if(regex_nome.test(sobrenome.value)){
            sobrenome.classList.remove('input_errado');
            acertos+=1; /* com essa variavel será possível verificar se todas as condições foram atendidas */ 
        }else{
            sobrenome.classList.add('input_errado');
            string_erros.push('Sobrenome: entre 2&25 caracteres e começar com maiúscula');
        }

        if(regex_email.test(email.value)){
            acertos+=1; /* com essa variavel será possível verificar se todas as condições foram atendidas */ 
            email.classList.remove('input_errado');
        }else{
            email.classList.add('input_errado');
            string_erros.push('Email inválido!');
        }

        if(regex_apelido.test(apelido.value)){
            acertos+=1; /* com essa variavel será possível verificar se todas as condições foram atendidas */ 
            apelido.classList.remove('input_errado');
        }else{
            apelido.classList.add('input_errado');
            string_erros.push('Apelido: Apenas underlines,letras e números');
        } 
        
        if(regex_senha.test(senha.value)){ // Teste da senha (Deve conter 8 caracteres incluindo Maiúsculas, mínusculas, números e especiais)
            acertos+=1; /* com essa variavel será possível verificar se todas as condições foram atendidas */ 
            senha.classList.remove('input_errado');
        }else{
            senha.classList.add('input_errado');
            string_erros.push('Senha: entre 8 e 16 caracteres, ao menos 1 maiúscula e especial');
        }
        
        if(string_erros != []){
            ativar_notificacao(string_erros, erro_unico=false, lista=true);
        }

        if(acertos == 5 && (senha.value == confirmar.value)){
            formulario.submit();
        }else{
            if(senha.value != confirmar.value){
                ativar_notificacao(msg="As senhas não coincidem... Tente novamente!", erro_unico=true, lista=false)
            }
        }
        
    }else{
        ativar_notificacao("Um dos campos está vazio... Por favor preencha-o!", erro_unico=true, lista=false);
    }
}

botao_submit.addEventListener('click', validar_inputs);