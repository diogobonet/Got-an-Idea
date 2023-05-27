// ABRIR MODAL
function configurarModal(botao, modal) {
    const botaoFechar = modal.querySelector("#fechar-modal");
    botao.addEventListener("click", () => modal.style.display = "block");
    botaoFechar.addEventListener("click", () => modal.style.display = "none");
  }
const botaoDoacao = document.getElementById("botao-doacao");
const modalDoacao = document.getElementById("modal-doacao");
configurarModal(botaoDoacao, modalDoacao);

function redirecionar(url){
  window.location.href = url;
}