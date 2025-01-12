let listaNumerosSorteados = [];
let numeroMaximo = 5;
let numeroSecreto = gerarNumeroAleatorio();
let tentativas = 1;

function iniciarJogo() {
    let chute = document.querySelector("#chute").value;
    let mensagemAviso = document.querySelector("#mensagem-aviso");

    // Verificar campo vazio
    if (chute == "") {
        mensagemAviso.innerHTML = "<p class='conteudo__mensagem'>Preencha o campo número secreto</p>";
        return;
    }

    // Verificar números negativos e superiores ao limite 
    if (chute < 0 || chute > numeroMaximo) {
        mensagemAviso.innerHTML = `<p class='conteudo__mensagem'>Máximo: ${numeroMaximo} | mínimo: 1`;
        return;
    }

    mensagemAviso.innerHTML = "";

    if (chute == numeroSecreto) {
        let palavraTentativa = tentativas > 1 ? "tentativas" : "tentativa";
        let mensagem = `Parabéns, você acertou o número secreto ${numeroSecreto} com ${tentativas} ${palavraTentativa}`;

        exibirMensagemNaTela("h1", "Você acertou!");
        exibirMensagemNaTela("p", mensagem);

        document.querySelector("#botao-chutar").setAttribute("disabled", true);
        document.querySelector("#botao-reiniciar").removeAttribute("disabled");
    } else {
        if (chute > numeroSecreto) {
            exibirMensagemNaTela("p", `O número secreto é menor que ${chute}`);
        } else {
            exibirMensagemNaTela("p", `O número secreto é maior que ${chute}`);
        }

        tentativas++;
    }

    document.querySelector("#chute").value = "";
}

function reiniciarJogo() {
    numeroSecreto = gerarNumeroAleatorio();
    tentativas = 1;
    exibirMensagemInicial();

    document.querySelector("#chute").value = "";
    document.querySelector("#botao-chutar").removeAttribute("disabled");
    document.querySelector("#botao-reiniciar").setAttribute("disabled", true);
}

function gerarNumeroAleatorio() {
    let numeroSorteado = parseInt(Math.random() * numeroMaximo + 1);
    let quantidadeNumerosSorteados = listaNumerosSorteados.length;

    if (numeroMaximo == quantidadeNumerosSorteados) {
        listaNumerosSorteados = [];
    }

    if (listaNumerosSorteados.includes(numeroSorteado)) {
        return gerarNumeroAleatorio();
    } else {
        listaNumerosSorteados.push(numeroSorteado);
        return numeroSorteado;
    }
}

function exibirMensagemNaTela(tag, texto) {
    let campo = document.querySelector(tag);
    campo.textContent = texto;
}

function exibirMensagemInicial() {
    exibirMensagemNaTela("h1", "Jogo do Número Secreto");
    exibirMensagemNaTela("p", `Escolha um número entre 1 e ${numeroMaximo}`);
}

exibirMensagemInicial();