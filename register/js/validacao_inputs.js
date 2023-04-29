var botao_submit = document.getElementById('botao_submit');


function ativar_notificacao(msg){
    let fundo_not = document.getElementById('fundo_para_notificacao');
    // let not_div = document.getElementById('notificacao_div');
    let mg_not = document.getElementById('mensagem_notificacao');

    fundo_not.classList.remove('hide');
    fundo_not.classList.add('visible');

    mg_not.textContent = msg;

    setTimeout(()=>{
        fundo_not.classList.remove('visible');
        fundo_not.classList.add('hide');
    }, 9000);
}

function validar_inputs(){

    let nome = document.querySelector('.info-nome');
    let sobrenome = document.querySelector('.info-sobrenome');
    let apelido = document.querySelector('.info-apelido');
    let email = document.querySelector('.info-email');
    let senha = document.querySelector('.info-senha');
    
    const regex_nome = /^[A-Z]{1}[a-z]{1,24}$/;
    const regex_senha = /^(?=.*[0-9])(?=.*[A-Z])(?=.*[\!\@\#\$\%\¨\&\*\(\)\<\>\"\']).{8,16}$/;

    if(nome.value.length>0 && sobrenome.value.length>0 && apelido.value.length>0 && email.value.length>0 && senha.value.length>0){
        let string_erros = ''; // Erros que serão colocados na notificação

        if(regex_nome.test(nome.value)){
            nome.classList.remove('input_errado');
        }else{
            nome.classList.add('input_errado');
            string_erros += 'Nome: entre 2e25 caracteres e começar com maiuscula';
        }
        
        if(regex_nome.test(sobrenome.value)){
            sobrenome.classList.remove('input_errado');
        }else{
            sobrenome.classList.add('input_errado');
            string_erros += '\nSobrenome: entre 2e25 caracteres e começar com maiuscula';
        }
        
        if(regex_senha.test(senha.value)){ // Teste da senha (Deve conter 8 caracteres incluindo Maiúsculas, mínusculas, números e especiais)
            senha.classList.remove('input_errado');
        }else{
            senha.classList.add('input_errado');
            string_erros += '\nSenha: entre 8 e 16 caracteres e ao menos 1 maiuscula e 1 especial';
        }
        
        ativar_notificacao(string_erros);
        
    }else{
        alert('Um dos campos está vazio!\npor favor preencha-o!');
    }
}

botao_submit.addEventListener('click', validar_inputs);