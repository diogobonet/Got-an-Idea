// =================== Transitar entre Informações e Ideias ====================
tab1_infos = document.querySelector('#tab1');
tab2_ideas = document.querySelector('#tab2');

function open_infos(){
    tab1_infos.classList.remove('tab_closed'); // remove a classe fechada (display:none)
    tab1_infos.classList.add('tab_opened'); // adiciona a classe aberta (display:flex)
    tab2_ideas.classList.remove('tab_opened'); // remove a classe aberta (display:flex)
    tab2_ideas.classList.add('tab_closed'); // adiciona a classe fechada (display:none)
}

function open_ideas(){
    tab2_ideas.classList.remove('tab_closed'); // remove a classe fechada (display:none)
    tab2_ideas.classList.add('tab_opened'); // adiciona a classe aberta (display:flex)
    tab1_infos.classList.remove('tab_opened'); // remove a classe aberta (display:flex)
    tab1_infos.classList.add('tab_closed'); // adiciona a classe fechada (display:none)
}

// ======================= Limite de Caracteres =======================
const elementos = document.querySelectorAll('.idea-desc');

elementos.forEach(elemento => {
  const textoOriginal = elemento.innerHTML;
  const limiteCaracteres = 190; // Defina o limite de caracteres desejado

  if (textoOriginal.length > limiteCaracteres) {
    elemento.innerHTML = textoOriginal.slice(0, limiteCaracteres) + "...";
  }
});

// ======================== Preview Foto ===============================
const image = document.querySelector(".imagem-perfil")
const input = document.querySelector(".input-imagem")

input.addEventListener("change", () => {image.src = URL.createObjectURL(input.files[0])})

// Seleciona todos os itens do menu
const menuItems = document.querySelectorAll('.menu li');

// Adiciona a classe "selected" ao primeiro item do menu
menuItems[0].classList.add('selected');

// Adiciona um ouvinte de eventos a cada item do menu
menuItems.forEach((item, index) => {
  item.addEventListener('click', () => {
    // Remove a classe "selected" de todos os itens do menu
    menuItems.forEach((item) => {
      item.classList.remove('selected');
    });

    // Adiciona a classe "selected" ao item do menu selecionado
    item.classList.add('selected');
  });
});

// ============= ABRIR E FECHAR MODAL ============
function abrirModal(modalId) {
  let modal = document.getElementById(modalId);
  let botaoFecharModal = modal.querySelector(".button-close");

  modal.style.display = "block";

  botaoFecharModal.addEventListener("click", function() {
      modal.style.display = "none";
  });
}

let botaoAlterarNome = document.getElementById("botao-alterarnome");
let botaoAlterarTelefone = document.getElementById("botao-alterartelefone");
let botaoAlterarCidade = document.getElementById("botao-alterarcidade");
let botaoAlterarFormacao = document.getElementById("botao-alterarformacao");

botaoAlterarNome.addEventListener("click", function() {
  abrirModal("modal-alterarnome");
});

botaoAlterarTelefone.addEventListener("click", function() {
  abrirModal("modal-alterartelefone");
});

botaoAlterarCidade.addEventListener("click", function() {
  abrirModal("modal-alterarcidade");
});

botaoAlterarFormacao.addEventListener("click", function() {
  abrirModal("modal-alterarformacao");
});

// Regex Telefone
const telefoneInput = document.getElementById('input-telefone');

telefoneInput.addEventListener('input', function () {
  const cleanedValue = this.value.replace(/[^\d]/g, '');
  const match = cleanedValue.match(/^(\d{2})(\d{4,5})(\d{4})$/);

  if (match) {
    this.value = `(${match[1]}) ${match[2]}-${match[3]}`;
  } else {
    this.value = cleanedValue.slice(0, 15);
  }
});