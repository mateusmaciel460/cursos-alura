function exibirMensagemNaTela() {
    let campo = document.querySelector('.conteudo__filmes');

    for (let contador = 0; contador < 8; contador++) {
        campo.innerHTML += `
            <img src="../imagens/imagem-comum.png" alt="Imagem do filme 01" class="conteudo__imagem">
        `;
    }
}

exibirMensagemNaTela();