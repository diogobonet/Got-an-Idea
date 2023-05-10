<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/style.css">
    <link rel="shortcut icon" href="../img/favicon.png" type="image/x-icon">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:opsz,wght,FILL,GRAD@48,400,0,0" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.css" integrity="sha512-5A8nwdMOWrSz20fDsjczgUidUBR8liPYU+WymTZP1lmY9G6Oc7HlZv156XqnsgNUzTyMefFTcsFH/tnJE/+xBg=="crossorigin="anonymous" referrerpolicy="no-referrer" />
    <title>got an Idea💡 | Juntar ideias em um único propósito</title>
</head>
<body>
    <div id="fundo_para_notificacao" class="hide">
        <div id="notificacao_div">
            <p id="mensagem_notificacao"></p>
        </div>
    </div>

    <header>
        <nav class="nav-bar" id="nav-bar">
            <img class="logo-header" src="../img/logowhite.png" alt="Logo Got an Idea">
            <div class="nav-list">
                <button id="btn-mobile"><span id="hamburguer"></span></button>
                <ul id="menu">
                    <li class="nav-item"><a href="" class="nav-link">Sobre nós</a></li>
                    <li class="nav-item"><a href="" class="nav-link">Nosso projeto</a></li>
                    <li class="nav-item"><a href="" class="nav-link">Comunidade</a></li>
                    <li class="nav-item"><a href="" class="nav-link">Recursos</a></li>
                    <li class="nav-item" id="hide-this"><a href="../login/login.html" class="link-registrar"><strong>Registrar-se</strong></a></li>
                </ul>
            </div>
            <div class="login-button">
                <a href="../login/login.html" class="botao-registrar"><strong>Registrar-se</strong></a>
            </div>
        </nav>
    </header>

    <main>
        
        <div id="cookie-popup">
            <p>Nós utilizamos cookies🍪 para garantir a melhor experiência em nosso site. Ao continuar navegando, você concorda com a nossa <a class="link-open-modal" href="#">política de cookies</a>.</p>
            <button onclick="aceitarCookies()" id="cookie-recusar">Recusar</button>
            <button class="aceitarCookies" onclick="aceitarCookies()">Aceitar</button>
          </div>
          <div class="dialog-div hidden">
              <dialog>
                <h1>Politicas de Uso de Dados</h1>
                <div class="dialog-enter">
                    <p>
                        A <strong>Política de Proteção de Dados Pessoais</strong> tem por finalidade estabelecer diretrizes,
                        princípios, objetivos e conceitos a serem seguidos por todas as partes relacionadas com a
                        Conab visando o cumprimento da Lei Geral de Proteção de Dados Pessoais (LGPD)
                        Lei n.º 13.709/2018.
                    </p>
                        <ol>
                            <li>O usuário concorda em fornecer seus dados tais como <strong>nome e sobrenome, email, senha</strong>, para utilização exclusivamente e somente no sistema e suas API's.</li>
                            <li>O usuário está ciente que caso os seus dados sejam vazados, a empresa <span>não</span> se responsabiliza com os dados vazados</li>
                            <li>As medidas de segurança, técnicas e administrativas para proteção de dados pessoais deverão ser observadas desde a fase de concepção do produto ou do serviço até a sua
                            execução, conceito denominado Privacidade desde a Concepção.</li>
                            <li>Dado pessoal: informação relacionada a pessoa natural identificada
                                ou identificável;</li>
                                <li>Tratamento: toda operação realizada com dados pessoais, como as que se
                                    referem a coleta, produção, recepção, classificação, utilização, acesso,
                                    reprodução, transmissão, distribuição, processamento, arquivamento,
                                    armazenamento, eliminação, avaliação ou controle da informação, modificação,
                                    comunicação, transferência, difusão ou extração;</li>
                        </ol>
                </div>
                <button class="close-dialog">Fechar</button>
              </dialog>
              
          </div>

        <div class="div-main">
            <div class="div-esquerda">
                <h1 class="h1-main">Juntar ideias em um único <br> <span class="span-h1-main"></span></h1>
                
                <p class="p-main">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Reprehenderit vel magni cumque ad possimus illum aliquid culpa suscipit officiis corporis voluptas beatae iusto eum repellendus perspiciatis, dignissimos dolorum sit reiciendis.</p>
                <div class="button-learn-main">
                    <button class="button-main">Registrar-se</button>
                    <a href="" class="learn-more">Saiba mais <span class="material-symbols-outlined">arrow_forward_ios</span></a>
                </div>
            </div>

            <div class="div-direita">
                <div class="img-wrapper">
                    <img class="img-main" src="img/GB3.png" alt="">
                </div>
            </div>
        </div>

        <section>
            <h1 class="h1-about"><span class="span-nosso">Nosso </span><span class="span-time"> Time</span></h1>
            <div class="div-about-top">
                <div class="person-div">
                    <img class="about-image" src="img/jpedro.png">
                    <h2>João Pedro</h2>
                    <p>Scrum Master</p>
                </div>
                <div class="person-div">
                    <img class="about-image" src="img/gb.png">
                    <h2>Gabriel Mocellin</h2>
                    <p>Product Owner</p>
                </div>
                <div class="person-div">
                    <img class="about-image" src="img/felipevermelho.png">
                    <h2>Felipe Vermelho</h2>
                    <p>Database Developer</p>
                </div>
            </div>
            <div class="div-about-base">
                <div class="person-div">
                    <img class="about-image" src="img/diogo.png">
                    <h2>Diogo Bonet</h2>
                    <p>Front-end Developer</p>
                </div>
                <div class="person-div">
                    <img class="about-image" src="img/nicolas.png">
                    <h2>Nicolas Peralta</h2>
                    <p>Front-end Developer</p>
                </div>
                <div class="person-div">
                    <img class="about-image" src="img/jgstresser.png">
                    <h2>João Trigo</h2>
                    <p>Full-Stack Developer</p>
                </div>
            </div>
        </section>

        <section class="objetivos-section">
            <div class="objetivo-div-esquerda">
                <div class="img-wrapper">
                    <img src="img/GB3.png" alt="">
                </div>
            </div>

            <div class="objetivo-div-direita">
                <h1>Objetivos</h1>
                <p>Nossos objetivos e ideais que buscam ajudar as pessoas e impactar o mundo positivamente requer um esforço constante e uma dedicação intensa. Isso inclui a necessidade de gerar ideias inovadoras e criativas que possam realmente fazer a diferença na vida das pessoas e na sociedade como um todo.</p>
                <div class="div-objetivos">
                    <details id="details-top" class="my-details">
                        <summary>
                            Conectar pessoas com ideias com colaboradores e investidores
                        </summary>
                        <div>
                            <p>Nosso propósito é fazer com que pessoas que possuem ideias, tenham interação com pessoas capacitadas a realizar o desafio proposto pelo idealizador.</p>
                        </div>
                    </details>

                    <details id="details-mid" class="my-details">
                        <summary>
                            Possibilitamos as pessoas a concretizar suas ideias
                        </summary>
                        <div>
                            <p>Nosso objetivo é fazer que as ideias não sejam apenas pensadas e esquecidas, mas sim que se realizem, facilitando não só a vida de uma pessoa, mas de toda a sociedade.</p>
                        </div>
                    </details>

                    <details id="details-bottom" class="my-details">
                        <summary>
                            Fomentar o mercado de Startup
                        </summary>
                        <div>
                            <p>É um objetivo que visamos estimular o crescimento e desenvolvimento de empresas com ideias de inovação, oferecendo suporte, conexões e recursos para que elas possam inovar e crescer.</p>
                        </div>
                    </details>
            </section>
            
    </main>

    <footer>
        <img class="img-footer" src="../img/logowhite.png" alt="Logo no footer do site">
        <div class="links-footer">
            <div class="footer-links">
                <h2>SOCIAL</h2>
                <a href=""><i class="fa fa-instagram" aria-hidden="true"></i>
                     Instagram</a>
                <a href=""><i class="fa fa-twitter-square" aria-hidden="true"></i> Twitter</a>
                <a href=""><i class="fa fa-facebook-square" aria-hidden="true"></i> Facebook</a>
                <a href=""><i class="fa fa-youtube-play" aria-hidden="true"></i> Youtube</a>
            </div>

            <div class="footer-links">
                <h2>DOCUMENTAÇÃO</h2>
                <a href=""><i class="fa fa-github-square" aria-hidden="true"></i> Repositório</a>
                <a href=""><i class="fa fa-book" aria-hidden="true"></i> Docs</a>
                <a href=""><i class="fa fa-trello" aria-hidden="true"></i> Trello</a>
            </div>
        </div>

        <div class="final-line"> 
            <p>&#169; got an Idea Enterprise</p> 
            <a href="">Termos</a> 
            <a class="link-open-modal" href="#">Privacidade</a>
        </div>
</footer>
    <script src="js/script.js"></script>
    <script src="js/acordeao.js"></script>
    <script src='../register/js/notificacao.js'></script>
    <script src="../register/js/verificar_mensagem.js"></script>
    <script>
        verificar_mensagem(<?php if(isset($_GET['msg'])){echo $_GET['msg'];}?>);
    </script>
</body>
</html>