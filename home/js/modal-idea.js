var modal = document.getElementById("modal-idea");
var botaoAbrir = document.getElementById("abrir-modal");
var botaoFechar = document.getElementsByClassName("fechar-modal")[0];

botaoAbrir.onclick = function() {
  modal.style.display = "block";
}

botaoFechar.onclick = function() {
  modal.style.display = "none";
}

window.onclick = function(event) {
  if (event.target == modal) {
    modal.style.display = "none";
  }
}
