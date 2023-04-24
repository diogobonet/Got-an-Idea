var botao_submit = document.getElementById('botao_submit');

function validar_inputs(){
    let nome = document.querySelector('.info-nome');
    let apelido = document.querySelector('.info-apelido');
    
    const regex_nome = /[\w|\W]{2,100}/
    if(regex_nome.test(nome)){
        alert('Ta dentro!')
    }
}

botao_submit.addEventListener('click', validar_inputs);