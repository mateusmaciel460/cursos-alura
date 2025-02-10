let mostrarNumerosSorteados = document.querySelector('#mostrar-numeros-sorteados');
let mostrarMensagem = document.querySelector('#mostrar-mensagem');

function sortear() {
    let quantidade = document.querySelector('#numero-quantidade').value;
    let numeroInicial = document.querySelector('#numero-inicial').value;
    let numeroFinal = document.querySelector('#numero-final').value;

    let listaNumerosSorteados = [];

    validacaoCampos(mostrarMensagem, quantidade, numeroInicial, numeroFinal, listaNumerosSorteados);

    mostrarNumerosSorteados.textContent = `${listaNumerosSorteados.join(', ')}`;
}

function adicionarNumerosSorteadosNaLista(quantidade, numeroInicial, numeroFinal, listaNumerosSorteados) {
    for (let contador = 0; contador < quantidade; contador++) {
        numeroSorteado = obterNumerosSorteados(numeroInicial, numeroFinal);

        while (listaNumerosSorteados.includes(numeroSorteado)) {
            numeroSorteado = obterNumerosSorteados(numeroInicial, numeroFinal);
        }   

        listaNumerosSorteados.push(numeroSorteado);
    }
}

function validacaoCampos(mostrarMensagem, quantidade, numeroInicial, numeroFinal, listaNumerosSorteados) {
    mostrarMensagem.textContent = '';

    let diferencaEntreNumeros = (numeroFinal - numeroInicial) + 1;

    if ((numeroInicial && numeroFinal && quantidade) == '') {
        mostrarMensagem.textContent = 'Preencha todos os campos.';
        return;
    }

    if (quantidade > (diferencaEntreNumeros)) {
        mostrarMensagem.textContent = `A quantidade deve ser até ${diferencaEntreNumeros} - E não ${quantidade}.`;
        return;
    }

    adicionarNumerosSorteadosNaLista(quantidade, numeroInicial, numeroFinal, listaNumerosSorteados);
    document.querySelector('#reiniciar').removeAttribute('disabled');
}

function reiniciar() {
    document.querySelector('#reiniciar').setAttribute('disabled', true);
    
    document.querySelector('#numero-inicial').value = '';
    document.querySelector('#numero-final').value = '';
    document.querySelector('#numero-quantidade').value = '';
    
    mostrarNumerosSorteados.textContent = 'Nenhum até agora';
    mostrarMensagem.textContent = '';
}

function obterNumerosSorteados(numeroInicial, numeroFinal) {
    numeroMaximo = Math.ceil(numeroInicial);
    numeroMinimo = Math.floor(numeroFinal);

    return parseInt(Math.random() * (numeroFinal - numeroInicial + 1) + numeroInicial);
}