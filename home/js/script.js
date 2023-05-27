// ABRIR MODAL
const inputTipoPostagem = document.getElementById('inputTipoPostagem'); // Input tipo de Postagem

const btnCadastrarIdeia = document.getElementById("btn-cadastrar-ideia"); // Pega o botão de cadastrar ideia
const btnCadastrarProjeto = document.getElementById("btn-cadastrar-projeto"); // Pega o botão de cadastrar projeto

const modal = document.getElementById("modal"); // Pega o modal da ideia
const tituloModal = document.getElementById('modal-titulo');
const formModal = document.getElementById('form-modal');


// Adiciona um evento de clique ao botão de cadastrar ideia
btnCadastrarIdeia.addEventListener("click", function() {
  modal.style.display = "block";
  inputTipoPostagem.value = 1;
  tituloModal.textContent = 'Cadastre sua ideia';

});

// Adiciona um evento de clique ao botão de cadastrar projeto
btnCadastrarProjeto.addEventListener("click", function() {
  modal.style.display = "block";
  inputTipoPostagem.value = 2;
  tituloModal.textContent = 'Cadastre seu projeto';

});

// Pega o botão de fechar o modal
const btnFechar = modal.querySelector(".close_button");

// Adiciona um evento de clique ao botão de fechar o modal 
btnFechar.addEventListener("click", function() {
  modal.style.display = "none";
});

// SELECIONAR ENTRE PROJETO E IDEIA NO HEADER
const ideiaDiv = document.querySelector('#select-ideia');
const projetoDiv = document.querySelector('#select-projeto');
const cadastroIdeiaDiv = document.querySelector('.cadastro-div');
const cadastroProjetoDiv = document.querySelectorAll('.cadastro-div')[1];
const donationInputDiv = document.querySelector('.div-donationinput'); // ADD RECENTLY

ideiaDiv.addEventListener('click', function() {
  cadastroIdeiaDiv.style.display = 'flex';
  cadastroProjetoDiv.style.display = 'none';
  donationInputDiv.style.display = 'none'; // ADD RECENTLY
  ideiaDiv.classList.add('active');
  projetoDiv.classList.remove('active');
});

projetoDiv.addEventListener('click', function() {
  cadastroProjetoDiv.style.display = 'flex';
  cadastroIdeiaDiv.style.display = 'none';
  donationInputDiv.style.display = 'block'; // ADD RECENTLY
  projetoDiv.classList.add('active');
  ideiaDiv.classList.remove('active');
});

// REDIRECIONAR VIA GET
function verDetalhes() {
  var url = "../ver-detalhes/index.php"
  window.location.href = url
}

// Aparecer a div da donation no modal do projeto
