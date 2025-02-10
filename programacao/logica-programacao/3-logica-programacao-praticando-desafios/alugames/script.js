let contarJogosAlugados = 0;

function alugar(id) {
    let jogos = document.querySelector('#jogos');
    let jogoEscolhido = jogos.querySelector(`#jogo-${id}`);
    let botaoJogoEscolhido = jogoEscolhido.querySelector('button');
    let imagemJogoEscolhido = jogoEscolhido.querySelector('img');

    let classeBotao = botaoJogoEscolhido.classList;
    let classeImagem = imagemJogoEscolhido.classList;

    atualizarStatusBotao(botaoJogoEscolhido, classeBotao, classeImagem);
}

function atualizarStatusBotao(botaoJogoEscolhido, classeBotao, classeImagem) {
    if (classeBotao.contains('conteudo__botao-azul')) {
        classeBotao.remove('conteudo__botao-azul');
        classeBotao.add('conteudo__botao-cinza');

        classeImagem.add('conteudo__imagem-opacidade');

        botaoJogoEscolhido.textContent = 'Devolver';
        contarJogosAlugados++;
    } else {
        classeBotao.remove('conteudo__botao-cinza');
        classeBotao.add('conteudo__botao-azul');

        classeImagem.remove('conteudo__imagem-opacidade');

        botaoJogoEscolhido.textContent = 'Alugar';
        contarJogosAlugados--;
    }

    let mostrarQuantidadeJogosAlugados = document.querySelector('#mostrar-quantidade-jogos-alugados');
    mostrarQuantidadeJogosAlugados.textContent = `Jogos alugados: ${contarJogosAlugados}`;
}