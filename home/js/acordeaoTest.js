/* Tentativa de fazer funcionar o acordeão */
function openTop(){
  const detailsTop = document.getElementById('details-top');
  const detailsMid = document.getElementById('details-mid');
  const detailsBottom = document.getElementById('details-bottom');

  if(detailsTop.hasAttribute('open')){ // Caso o sumário esteja aberto, irá fechá-lo ao clicar em cima do mesmo sumário
    detailsTop.removeAttribute('open'); 
  } else if(detailsMid.hasAttribute('open') || detailsMid.hasAttribute('open')){ // Caso os demais estejam abertos, serão fechados e o clicado será aberto.
    detailsMid.removeAttribute('open'); detailsBottom.removeAttribute('open');
    detailsTop.setAttribute('open', '');
    console.log('Fechou os outros 2 e abriu openTop()!'); // Teste
  } else{
    detailsTop.setAttribute('open', '');
    console.log('Apenas abriu! openTop()!'); // Teste
  }
  return console.log('Acabou o openTop()!'); // Teste
}

function openTeste(){
  const detailsTop = document.getElementById('details-top');
  if(detailsTop.hasAttribute('open')){
    detailsTop.removeAttribute('open');
    console.log('fechou');
  } else{
    detailsTop.setAttribute('open', '');
    console.log('abriu');
  }
}