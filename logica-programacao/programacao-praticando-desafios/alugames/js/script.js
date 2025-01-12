let contarJogosAlugados = 0;

function exibirMensagemNaTela(tag, texto) {
    let campo = document.querySelector(tag);
    campo.textContent = texto;
}

function operar(id) {
    let conteudoJogos = document.querySelector("#conteudo-grupo");
    let conteudoJogoEspecifico = conteudoJogos.querySelector(`#jogo-${id}`);
    let botaoJogo = conteudoJogoEspecifico.querySelector("#conteudo-link");

    atualizarStatusBotao(botaoJogo);
    exibirMensagemNaTela("h1", `Total de jogos alugados: ${contarJogosAlugados}`);
}

function confirmarDevolucao(classeBotao, botaoJogo) {
    let mensagem = prompt("Confirma a devolução (Sim)");

    if (mensagem === "Sim") {
        classeBotao.remove("conteudo__camada-botao--cinza");
        classeBotao.add("conteudo__camada-botao--azul");

        botaoJogo.textContent = "Alugar";
        contarJogosAlugados--;
    } else {
        return;
    }
}

function confirmarAluguel(classeBotao, botaoJogo) {
    classeBotao.remove("conteudo__camada-botao--azul");
    classeBotao.add("conteudo__camada-botao--cinza");

    botaoJogo.textContent = "Devolver";
    contarJogosAlugados++;
}

function atualizarStatusBotao(botaoJogo) {
    let classeBotao = botaoJogo.classList;

    if (classeBotao == "conteudo__camada-botao--azul") {
        confirmarAluguel(classeBotao, botaoJogo);
    } else {
        confirmarDevolucao(classeBotao, botaoJogo);
    }
}