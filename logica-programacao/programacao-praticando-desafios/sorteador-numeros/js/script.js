let mensagem = document.querySelector("#mensagem");
let botaoReiniciar = document.querySelector("#botao-reiniciar");

botaoReiniciar.setAttribute("disabled", true);

function sortear() {
    let quantidade = document.querySelector("#quantidade").value;
    let numeroInicial = document.querySelector("#numero-inicial").value;
    let numeroFinal = document.querySelector("#numero-final").value;

    let diferencaInicialFinal = (numeroFinal - numeroInicial) + 1;

    let listaNumerosSorteados = [];
    let numeroSorteado;

    // Verificando se a quantidade é equivalente com a diferença
    if (quantidade > diferencaInicialFinal) {
        mensagem.innerHTML = `Você não pode escolher uma quantidade maior que ${diferencaInicialFinal}`;
        return;
    }

    if ((quantidade && numeroInicial && numeroFinal) == "") {
        mensagem.textContent = `Preencha todos os campos!`;
        return;
    }

    for (let contador = 0; contador < quantidade; contador++) {
        numeroSorteado = gerarNumeroAleatorio(numeroInicial, numeroFinal);

        while (listaNumerosSorteados.includes(numeroSorteado)) {
            numeroSorteado = gerarNumeroAleatorio(numeroInicial, numeroFinal); 
        }

        listaNumerosSorteados.push(numeroSorteado);
    }

    mensagem.textContent = `Números sorteados: ${listaNumerosSorteados.join(", ")}`;

    atualizarStatusBotao();
}

function reiniciar() {
    mensagem.textContent = `Números sorteados: nenhum até agora`;

    atualizarStatusBotao();
    
    document.querySelector("#quantidade").value = "";
    document.querySelector("#numero-inicial").value = "";
    document.querySelector("#numero-final").value = "";
}

function atualizarStatusBotao() {
    let classeBotaoReiniciar = botaoReiniciar.classList;

    if (classeBotaoReiniciar == "conteudo__botao-azul") {
        classeBotaoReiniciar.remove("conteudo__botao-azul");
        classeBotaoReiniciar.add("conteudo__botao-cinza");

        botaoReiniciar.setAttribute("disabled", true);
    } else {
        classeBotaoReiniciar.remove("conteudo__botao-cinza");
        classeBotaoReiniciar.add("conteudo__botao-azul");

        botaoReiniciar.removeAttribute("disabled");
    }
}

function gerarNumeroAleatorio(numeroInicial, numeroFinal) {
    numeroInicial = Math.ceil(numeroInicial);
    numeroFinal = Math.floor(numeroFinal);
  
    return parseInt(Math.random() * (numeroFinal - numeroInicial + 1) + numeroInicial);
}