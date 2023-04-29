var botao_submit = document.getElementById('botao_submit');

function validar_inputs(){

    let nome = document.querySelector('.info-nome');
    let sobrenome = document.querySelector('.info-sobrenome');
    let apelido = document.querySelector('.info-apelido');
    let email = document.querySelector('.info-email');
    let senha = document.querySelector('.info-senha');
    
    const regex_nome = /[\w|\W]{2,100}/;
    const regex_senha = /[0-9A-Za-z!@#$%¨&*()]{8,16}/;

    if(nome.value.length>0 && sobrenome.value.length>0 && apelido.value.length>0 && email.value.length>0 && senha.value.length>0){

        if(regex_nome.test(nome.value)){
            alert('Nome ta certo!');
            nome.classList.remove('input_errado');
        }else{
            nome.classList.add('input_errado');
        }
        
        if(regex_nome.test(sobrenome.value)){
            alert('Sobrenome ta certo!');
            sobrenome.classList.remove('input_errado');
        }else{
            sobrenome.classList.add('input_errado');
        }
        
        if(regex_senha.test(senha.value)){ // Teste da senha (Deve conter 8 caracteres incluindo Maiúsculas, mínusculas, números e especiais)
            alert('Senha ta certa!');
            senha.classList.remove('input_errado');
        }else{
            senha.classList.add('input_errado');
        }
        


    }else{
        alert('Um dos campos está vazio!\npor favor preencha-o!');
    }
}

botao_submit.addEventListener('click', validar_inputs);