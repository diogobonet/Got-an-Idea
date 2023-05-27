const input_titulo       = document.getElementById('input_titulo');
const input_doacao       = document.getElementById('input_doacao');
const input_descricao    = document.getElementById('input_descricao');
const meu_select         = document.getElementById('meu-select');
const formularioPostagem = document.getElementById('form-modal');
//const inputTipoPostagem = document.getElementById('inputTipoPostagem'); ### Variável já instanciada no arquivo 'script.js'. ###

function verificarInputsPostagem(){
    let ideia   = false;
    let projeto = false;
    let inputs_result = [];
    let inputs_array  = [];

    if(inputTipoPostagem.value == 1){
        ideia = true;
        inputs_array  = [input_titulo, input_descricao, meu_select];
    } else if(inputTipoPostagem.value == 2){
        projeto = true;
        inputs_array  = [input_titulo, input_doacao, input_descricao, meu_select];
    }

    function verificarVazio(input){
        if(input.value.trim() != '' && input.value.trim() != 'Categoria'){return inputs_result.push(true);}
        return inputs_result.push(false);
    }

    for(input of inputs_array){
        verificarVazio(input);
    }

    if(ideia){
        if(inputs_result.every(elemento => elemento === true)){
            formularioPostagem.submit();
        }
        else{
            let log_erro = [];
            if(inputs_result[0] == false){log_erro.push('Titulo inválido!')}
            if(inputs_result[1] == false){log_erro.push('Descricao inaválida!')}
            if(inputs_result[2] == false){log_erro.push('Select não selecionado!')}
            ativar_notificacao(msg=log_erro, erro_unico=false, lista=true);
        }
    }
    else if(projeto){
        if(inputs_result.every(elemento => elemento === true)){
            formularioPostagem.submit();
        }
        else{
            let log_erro = [];
            if(inputs_result[0] == false){log_erro.push('Titulo inválido!')}
            if(inputs_result[1] == false){log_erro.push('Doacao inválida!')}
            if(inputs_result[2] == false){log_erro.push('Descricao inaválida!')}
            if(inputs_result[3] == false){log_erro.push('Select não selecionado!')}
            ativar_notificacao(msg=log_erro, erro_unico=false, lista=true);
        }
        
    }
}