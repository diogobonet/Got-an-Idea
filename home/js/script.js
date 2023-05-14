// ABRIR MODAL

const btnCadastrarIdeia = document.getElementById("btn-cadastrar-ideia"); // Pega o botão de cadastrar ideia
const modalIdeia = document.getElementById("modal-ideia"); // Pega o modal da ideia

// Adiciona um evento de clique ao botão de cadastrar ideia
btnCadastrarIdeia.addEventListener("click", function() {
  // Exibe o modal da ideia
  modalIdeia.style.display = "block";
});


// Pega o botão de cadastrar projeto
const btnCadastrarProjeto = document.getElementById("btn-cadastrar-projeto");

// Pega o modal do projeto
const modalProjeto = document.getElementById("modal-projeto");

// Adiciona um evento de clique ao botão de cadastrar projeto
btnCadastrarProjeto.addEventListener("click", function() {
  // Exibe o modal do projeto
  modalProjeto.style.display = "block";
});

// Pega o botão de fechar o modal da ideia
const btnFecharIdeia = modalIdeia.querySelector(".close_button");

// Adiciona um evento de clique ao botão de fechar o modal da ideia
btnFecharIdeia.addEventListener("click", function() {
  // Esconde o modal da ideia
  modalIdeia.style.display = "none";
});


// Pega o botão de fechar o modal do projeto
const btnFecharProjeto = modalProjeto.querySelector(".close_button");

// Adiciona um evento de clique ao botão de fechar o modal do projeto
btnFecharProjeto.addEventListener("click", function() {
  // Esconde o modal do projeto
  modalProjeto.style.display = "none";
});

// SELECIONAR ENTRE PROJETO E IDEIA NO HEADER
const ideiaDiv = document.querySelector('#select-ideia');
const projetoDiv = document.querySelector('#select-projeto');
const cadastroIdeiaDiv = document.querySelector('.cadastro-div');
const cadastroProjetoDiv = document.querySelectorAll('.cadastro-div')[1];

ideiaDiv.addEventListener('click', function() {
  cadastroIdeiaDiv.style.display = 'flex';
  cadastroProjetoDiv.style.display = 'none';
  ideiaDiv.classList.add('active');
  projetoDiv.classList.remove('active');
});

projetoDiv.addEventListener('click', function() {
  cadastroProjetoDiv.style.display = 'flex';
  cadastroIdeiaDiv.style.display = 'none';
  projetoDiv.classList.add('active');
  ideiaDiv.classList.remove('active');
});
