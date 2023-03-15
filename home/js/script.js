//menu hamburgue
const btnMobile = document.getElementById('btn-mobile');

function toggleMenu(event) {
    if (event.type === 'touchstart') event.preventDefault();
    const nav = document.getElementById('nav-bar');
    nav.classList.toggle('active');
}

btnMobile.addEventListener('click', toggleMenu);
btnMobile.addEventListener('touchstart', toggleMenu);

// REACT DO H1 PROPÓSITO
document.addEventListener('DOMContentLoaded', function(event){
    // array with texts to type in typewriter
    var dataText = [ "propósito", "lugar", "propósito"];
    
    // type one text in the typwriter
    // keeps calling itself until the text is finished
    function typeWriter(text, i, fnCallback) {
      // check if text isn't finished yet
      if (i < (text.length)) {
        // add next character to h1
        document.querySelector(".span-h1-main").innerHTML = text.substring(0, i+1) +'<span aria-hidden="true"></span>';
  
        // wait for a while and call this function again for next character
        setTimeout(function() {
          typeWriter(text, i + 1, fnCallback)
        }, 100);
      }
      // text finished, call callback if there is a callback function
      else if (typeof fnCallback == 'function') {
        // call callback after timeout
        setTimeout(fnCallback, 700);
      }
    }
    // start a typewriter animation for a text in the dataText array
     function StartTextAnimation(i) {
       if (typeof dataText[i] == 'undefined'){
          setTimeout(function() {
            StartTextAnimation(0);
          }, 20000);
       }
       // check if dataText[i] exists
       else{
        if(i < dataText[i].length) {
        // text exists! start typewriter animation
       typeWriter(dataText[i], 0, function(){
         // after callback (and whole text has been animated), start next text
         StartTextAnimation(i + 1);
        });
          }
        }
      }
    // start the text animation
    StartTextAnimation(0);
  });

  // Aceitar cookies
  function aceitarCookies() {
    document.cookie = "aceitou_cookies=true";
    document.getElementById("cookie-popup").style.display = "none";
  }

  // Política de cookies
  // obtém o link e o dialog
  const openLink = document.querySelector('.link-open-modal');
  const dialogDiv = document.querySelector('.dialog-div');
  
  // Adiciona um ouvinte de eventos ao link para quando ele for clicado
  openLink.addEventListener('click', () => {
    // Altera a classe da janela modal de "hidden" para "static"
    dialogDiv.classList.remove('hidden');
    dialogDiv.classList.add('fixed');
  });
  
  // Seleciona o botão de Fechar
  const closeButton = document.querySelector('.close-dialog');
  
  // Adiciona um ouvinte de eventos ao botão de Fechar para quando ele for clicado
  closeButton.addEventListener('click', () => {
    // Altera a classe da janela modal de "static" para "hidden"
    dialogDiv.classList.remove('fixed');
    dialogDiv.classList.add('hidden');
  });

