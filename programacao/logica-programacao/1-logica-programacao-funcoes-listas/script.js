let numeroMinimo = 1;
let numeroMaximo = 5;
let listaNumerosSorteados = [];
let numeroSecreto = gerarNumeroAleatorio();
let tentativas = 1;
let chute;

let mensagem = document.querySelector('#mensagem');

function chutar() {
    chute = document.querySelector('#chute').value;

    mensagem.textContent = '';

    // Validação (campo vazio)
    if (chute == '') {
        mensagem.textContent = 'Preencha o campo número inteiro';
        return;
    }

    if (chute == numeroSecreto) {
        let palavraTentativa = tentativas > 1 ? 'tentativas' : 'tentativa';
        let mensagem = `Você acertou o número secreto ${numeroSecreto} com ${tentativas} ${palavraTentativa}`;

        exibirMensagemNaTela('h1', 'Acertou!');
        exibirMensagemNaTela('p', mensagem);

        document.querySelector('#chutar').setAttribute('disabled', true);
        document.querySelector('#reiniciar').removeAttribute('disabled');
    } else {
        if (chute > numeroSecreto) {
            exibirMensagemNaTela('p', `O número secreto é menor que ${chute}`);
        } else {
            exibirMensagemNaTela('p', `O número secreto é maior que ${chute}`);
        }

        tentativas++;
    }

    document.querySelector('#chute').value = '';
}

function gerarNumeroAleatorio() {
    let numeroSorteado = parseInt(Math.random() * numeroMaximo + numeroMinimo);

    if (listaNumerosSorteados.length == numeroMaximo) {
        listaNumerosSorteados = [];
    }

    if (listaNumerosSorteados.includes(numeroSorteado)) {
        return gerarNumeroAleatorio();
    } else {
        listaNumerosSorteados.push(numeroSorteado);
        console.log(listaNumerosSorteados);
        return numeroSorteado;
    }
}

function reiniciar() {
    document.querySelector('#reiniciar').setAttribute('disabled', true);
    document.querySelector('#chutar').removeAttribute('disabled');

    exibirMensagemInicial();
    numeroSecreto = gerarNumeroAleatorio();
    tentativas = 1;
}

function exibirMensagemNaTela(tag, texto) {
    let campo = document.querySelector(tag);
    campo.innerHTML = texto;
}

function exibirMensagemInicial() {
    exibirMensagemNaTela('h1', 'Jogo do Número Secreto');
    exibirMensagemNaTela('p', `Digite um número entre ${numeroMinimo} e ${numeroMaximo}`);
}

exibirMensagemInicial();