/* Acordeao Funcionando */
const detailsTop = document.getElementById('details-top');
const detailsMid = document.getElementById('details-mid');
const detailsBottom = document.getElementById('details-bottom');

const summaryTop = detailsTop.querySelector('summary');
const summaryMid = detailsMid.querySelector('summary');
const summaryBottom = detailsBottom.querySelector('summary');


detailsTop.removeAttribute('open'); // remove o atributo "open" inicialmente
detailsMid.removeAttribute('open'); // remove o atributo "open" inicialmente
detailsBottom.removeAttribute('open'); // remove o atributo "open" inicialmente

summaryTop.addEventListener('click', function(event) {
  event.preventDefault(); // Previne o comportamento padrão.
  if (detailsMid.hasAttribute('open') || detailsBottom.hasAttribute('open')) {
      detailsMid.removeAttribute('open'); //fechar os que já estão abertos
      detailsBottom.removeAttribute('open');
  }
  if (detailsTop.hasAttribute('open')) {
      detailsTop.removeAttribute('open', '');
  } else{
      detailsTop.setAttribute('open', '');
  }
});

summaryMid.addEventListener('click', function(event) {
  event.preventDefault(); // Previne o comportamento padrão.
  if (detailsTop.hasAttribute('open') || detailsBottom.hasAttribute('open')) {
      detailsTop.removeAttribute('open'); //fechar os que já estão abertos
      detailsBottom.removeAttribute('open'); //fechar os que já estão abertos
  }
  if (detailsMid.hasAttribute('open')) {
      detailsMid.removeAttribute('open', '');
  } else{
      detailsMid.setAttribute('open', '');
  }
});

summaryBottom.addEventListener('click', function(event) {
  event.preventDefault(); // Previne o comportamento padrão.
  if (detailsTop.hasAttribute('open') || detailsMid.hasAttribute('open')) {
      detailsTop.removeAttribute('open'); //fechar os que já estão abertos
      detailsMid.removeAttribute('open'); //fechar os que já estão abertos
  }
  if (detailsBottom.hasAttribute('open')) {
      detailsBottom.removeAttribute('open', '');
  } else{
      detailsBottom.setAttribute('open', '');
  }
});