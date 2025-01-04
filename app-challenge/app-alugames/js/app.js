let contagemAlugados = 0;

function alugarJogo(id) {
    let resultadoJogosAlugados = document.querySelector('#resultado-jogos-alugados');
    let jogo = document.querySelector(`#jogo-${id}`);
    let imagemJogo = jogo.querySelector('#imagem-jogo');
    let botaoJogo = jogo.querySelector('#botao-jogo');
    
    let mensagem;

    if (botaoJogo.classList.contains('container__grupo-botao--disponivel')) {
        adicionarRemoverClasse(botaoJogo, 'botao--alugado', 'botao--disponivel');
        adicionarRemoverClasse(imagemJogo, 'imagem--opacidade', 'imagem');

        botaoJogo.innerHTML = 'Devolver';
        contagemAlugados++;
    } else {
        
        mensagem = prompt('Confirma a devolução? (Sim)');

        if (mensagem == 'Sim') {
            adicionarRemoverClasse(botaoJogo, 'botao--disponivel', 'botao--alugado');
            adicionarRemoverClasse(imagemJogo, 'imagem', 'imagem--opacidade');
            botaoJogo.innerHTML = 'Alugar';
            contagemAlugados--;
        }
    }

    resultadoJogosAlugados.innerHTML = contagemAlugados;
}

function adicionarRemoverClasse (elemento, tituloAdicionar, tituloRemover) {
    let nomeInicialDaClasse = 'container__grupo';

    elemento.classList.add(`${nomeInicialDaClasse}-${tituloAdicionar}`);
    elemento.classList.remove(`${nomeInicialDaClasse}-${tituloRemover}`);
}