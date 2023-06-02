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
function configurarModal(botao, modal) {
  const botaoFechar = modal.querySelector("#fechar-modal");
  botao.addEventListener("click", () => modal.style.display = "block");
  botaoFechar.addEventListener("click", () => modal.style.display = "none");
}

const botaoAlterarNome = document.getElementById("botao-alterarnome");
const modalAlterarNome = document.getElementById("modal-alterarnome");
configurarModal(botaoAlterarNome, modalAlterarNome);

const botaoAlterarTelefone = document.getElementById("botao-alterartelefone");
const modalAlterarTelefone = document.getElementById("modal-alterartelefone");
configurarModal(botaoAlterarTelefone, modalAlterarTelefone);

const botaoAlterarCidade = document.getElementById("botao-alterarcidade");
const modalAlterarCidade = document.getElementById("modal-alterarcidade");
configurarModal(botaoAlterarCidade, modalAlterarCidade);

const botaoAlterarFormacao = document.getElementById("botao-alterarformacao");
const modalAlterarFormacao = document.getElementById("modal-alterarformacao");
configurarModal(botaoAlterarFormacao, modalAlterarFormacao);

const botaoApagar = document.getElementById("botao-apagar");
const modalApagar = document.getElementById("modal-apagar");
configurarModal(botaoApagar, modalApagar);

const botaoApagarideia = document.getElementById("botao-apagar-ideia");
const modalApagarideia = document.getElementById("modal-apagar-ideia");
configurarModal(botaoApagarideia, modalApagarideia);

// TELEFONE
document.getElementById('input-telefone').addEventListener('input', function() {
  var telefone2 = this.value.replace(/\D/g, '');
  var formattedTelefone = telefone2.replace(/^(\d{0,2})?(\d{0,5})?(\d{0,4})?$/, function(match, p1, p2, p3) {
    var formatted = '';
    if (p1) {
      formatted += '(' + p1;
    }
    if (p2) {
      formatted += ') ' + p2;
    }
    if (p3) {
      formatted += '-' + p3;
    }
    return formatted;
  });
  this.value = formattedTelefone;
});

// INPUTS REGEX
