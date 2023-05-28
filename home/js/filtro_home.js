//JavaScript para filtrar as Postagens na Home
const formElement = document.querySelector('#form-filtro'); //Pega o formulário
const selectElement = document.querySelector('#select-filtros'); //Pega o campo select do form

selectElement.addEventListener('change', function() { //Caso o usuário selecione alguma opção, automaticamente envia o formulário
    formElement.submit();
});