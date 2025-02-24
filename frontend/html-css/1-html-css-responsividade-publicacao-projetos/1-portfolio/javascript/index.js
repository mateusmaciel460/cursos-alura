let caminhoForaIndice = window.location.href.split('/')[4];
let estadoPaginaPrincipal = caminhoForaIndice == '' ? 'index.html' : '../';
let estadoPaginaGeral = caminhoForaIndice == 'pages' ? './' : 'pages/';

function exibirElementoNaTela(elemento, texto) {
    let campo = document.querySelector(elemento);
    campo.innerHTML = texto;
}

exibirElementoNaTela(
    '.cabecalho',
    `<ul class="cabecalho__menu-lista">
        <a href="${estadoPaginaPrincipal}" class="cabecalho__menu-link">Home</a>
        <a href="${estadoPaginaGeral}sobre-mim.html" class="cabecalho__menu-link">Sobre mim</a>
        <a href="${estadoPaginaGeral}curriculo.html" class="cabecalho__menu-link">Currículo</a>
    </ul>`
);

exibirElementoNaTela(
    '.rodape', 
    `<p class="rodape__texto">Desenvolvido por Alura.</p>`
);