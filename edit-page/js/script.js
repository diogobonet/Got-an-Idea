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