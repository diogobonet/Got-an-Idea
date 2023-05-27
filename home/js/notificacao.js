var notificacao_ativa = false;

let fundo_not = document.getElementById('fundo_para_notificacao');
let not_div = document.getElementById('notificacao_div');
let mg_not = document.getElementById('mensagem_notificacao');

function ativar_notificacao(msg, erro_unico, lista){
    if(notificacao_ativa == false){
        notificacao_ativa = true;

        if(erro_unico == true){
            mg_not.style.alignItems = 'center';
        }
        if(lista == true){ // Caso seja passado como parâmentro uma lista, serão usados <br's> para separar cada String de erro. (necessário)
            for(var i = 0; i < msg.length; i++){
                mg_not.innerHTML += msg[i];
                mg_not.innerHTML += '</br>'; 
            }

        } else{
            mg_not.textContent = msg; // Caso seja passado apenas uma string, não será necessário utilizar o for e <br's>
        }

        fundo_not.classList.remove('hide');
        fundo_not.classList.add('visible');
        
        setTimeout(()=>{
            mg_not.style.alignItems = null;
            fundo_not.classList.remove('visible');
            fundo_not.classList.add('hide');
            mg_not.innerHTML = "";

            notificacao_ativa = false;
        }, 6000); // Timer para remover a visibilidade da notificacao ao terminar o timer visivel
    }
}