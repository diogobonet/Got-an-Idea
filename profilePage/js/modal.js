function configurarModal(botao, modal) {
    const botaoFechar = modal.querySelector("#fechar-modal");
    botao.addEventListener("click", () => modal.style.display = "block");
    botaoFechar.addEventListener("click", () => modal.style.display = "none");
}

const botaoLogout = document.getElementById("botao-logout-test");
const modalLogout = document.getElementById("modal-deslogar");
configurarModal(botaoLogout, modalLogout);
