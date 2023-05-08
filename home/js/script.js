const selectIdeia = document.getElementById('select-ideia');
const selectProjeto = document.getElementById('select-projeto');

// adiciona o evento de clique em ambos os links
selectIdeia.addEventListener('click', selecionarIdeia);
selectProjeto.addEventListener('click', selecionarProjeto);

function selecionarIdeia() {
  // remove a classe 'active' de 'select-projeto'
  selectProjeto.classList.remove('active');
  // adiciona a classe 'active' em 'select-ideia'
  selectIdeia.classList.add('active');
  // atualiza o texto do parágrafo
  document.querySelector('.cadastro-div p').textContent = 'Você tem uma ideia?';
  // atualiza o texto do botão
  document.querySelector('.cadastro-div button').textContent = 'Cadastrar Ideia';
}

function selecionarProjeto() {
    // remove a classe 'active' de 'select-ideia'
    selectIdeia.classList.remove('active');
    // adiciona a classe 'active' em 'select-projeto'
    selectProjeto.classList.add('active');
    // atualiza o texto do parágrafo
    document.querySelector('.cadastro-div p').textContent = 'Você tem um projeto?';
    // atualiza o texto do botão
    document.querySelector('.cadastro-div button').textContent = 'Cadastrar Projeto';
  }