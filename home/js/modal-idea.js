let modal = document.getElementById("modal");
let botaoAbrir = document.getElementById("abrir-modal");
let botaoFechar = document.getElementById("close_button_cadastro_ideia");

botaoAbrir.onclick = function() {
  modal.style.display = "block";
}

botaoFechar.addEventListener('click', ()=>{
  modal.style.display="none";
});

window.onclick = function(event) {
  if (event.target == modal) {
    modal.style.display = "none";
  }
}
