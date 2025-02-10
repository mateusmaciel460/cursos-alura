let listaAmigosAdicionados = [];

let amigosAdicionados = document.querySelector('#exibir-amigos-adicionados');
let amigosSorteados = document.querySelector('#exibir-amigos-sorteados');
let mensagem = document.querySelector('#mensagem');

function adicionar() {
    let amigo = document.querySelector('#amigo-secreto').value;

    validacaoCampos(amigo, mensagem, listaAmigosAdicionados);
    exibirAmigosAdicionados(listaAmigosAdicionados);
    
    document.querySelector('#amigo-secreto').value = '';
}

function exibirAmigosAdicionados(listaAmigosAdicionados) {
    amigosAdicionados.innerHTML = '';
    amigosAdicionados.innerHTML = `${listaAmigosAdicionados.join(', ')}`;
}

function validacaoCampos(amigo, mensagem, listaAmigosAdicionados) {
    let verificarAmigoAdicionadoComum = listaAmigosAdicionados.includes(amigo);
    let verificarAmigoAdicionadoIncomum = listaAmigosAdicionados.join(',').toLowerCase().includes(amigo);

    mensagem.textContent = '';

    if (amigo == '') {
        mensagem.textContent = 'Preencha o campo do amigo.';
        return;
    }

    if (verificarAmigoAdicionadoComum || verificarAmigoAdicionadoIncomum) {
        mensagem.textContent = `${amigo} já foi adicionado.`;
        return;
    }

    listaAmigosAdicionados.push(amigo);
}

function listarAmigosSorteados(quantidadeAmigos, amigosSorteados, listaAmigosAdicionados) {
    
    amigosSorteados.innerHTML = '';

    for (let contador = 0; contador < quantidadeAmigos; contador++) {
        if ((quantidadeAmigos - 1) == contador) {
            amigosSorteados.innerHTML += `${listaAmigosAdicionados[contador]} -> ${listaAmigosAdicionados[0]} </br>`;
        } else {
            amigosSorteados.innerHTML += `${listaAmigosAdicionados[contador]} -> ${listaAmigosAdicionados[contador + 1]} </br>`;
        }
    }
}

function sortear() {
    let quantidadeAmigos = listaAmigosAdicionados.length;

    embaralharLista(listaAmigosAdicionados);
    verificarLimiteAmigosSorteados(quantidadeAmigos);
}

function verificarLimiteAmigosSorteados(quantidadeAmigos) {
    mensagem.innerHTML = '';

    if (quantidadeAmigos < 4) {
        mensagem.textContent = 'Tenha 4 amigos para realizar o sorteio.';
        return;
    }

    listarAmigosSorteados(quantidadeAmigos, amigosSorteados, listaAmigosAdicionados);

    document.querySelector('#reiniciar').removeAttribute('disabled');
}

function embaralharLista(listaSorteio) {
    listaSorteio.sort(() => Math.random() - 0.5);
}

function reiniciar() {
    document.querySelector('#reiniciar').setAttribute('disabled', true);
    amigosAdicionados.textContent = '';
    amigosSorteados.textContent = '';

    listaAmigosAdicionados = [];
}