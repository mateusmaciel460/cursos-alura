let campoMensagemAlerta = document.querySelector('#campo-alerta-mensagem');
let campoNomeAmigo = document.querySelector('#campo-nome-amigo');
let botaoReiniciar = document.querySelector('#botao-reiniciar');
let botaoSortear = document.querySelector('#botao-sortear');
let botaoAdicionar = document.querySelector("#botao-adicionar");

let listagemAmigosAdicionados = [];

function verificarAmigoIncluido() {
    let quantidadeAmigosAdicionados = listagemAmigosAdicionados.length;

    if (quantidadeAmigosAdicionados < 4) {
        campoMensagemAlerta.innerHTML = '<p class="container__alert">No mínimo 4 amigos.<p>';
    } else {
        botaoReiniciar.removeAttribute('disabled');
        campoMensagemAlerta.innerHTML = '';
        sortear();
    }
}

function verificarCampo() {
    let nomeAmigo = campoNomeAmigo.value;
    let verificarRepeticaoDeAmigo = listagemAmigosAdicionados.includes(nomeAmigo);
    let buscarNomeIdentifico;

    listagemAmigosAdicionados.forEach((amigos) => {
        buscarNomeIdentifico = amigos.toLowerCase();
    });

    let verificarNomeIdentico = nomeAmigo.toLowerCase() == buscarNomeIdentifico;

    botaoAdicionar.textContent = 'Adicionar';
    botaoSortear.removeAttribute('disabled');

    if (nomeAmigo == '') {
        campoMensagemAlerta.innerHTML = '<p class="container__alert">Digite o nome do amigo!<p>';
    } else if (verificarRepeticaoDeAmigo || verificarNomeIdentico) {
        campoMensagemAlerta.innerHTML = `<p class="container__alert">O nome ${nomeAmigo} já foi adicionado, tente outro!</p>`;
    } else {
        campoMensagemAlerta.innerHTML = '';
        adicionar();
    }
}

function adicionar() {
    let nomeAmigo = campoNomeAmigo.value;
    let amigosIncluidos = document.querySelector('#lista-amigos-incluidos');

    let listaAmigosSorteio = document.querySelector('#lista-amigos-sorteio');
    listaAmigosSorteio.innerHTML = '';

    listagemAmigosAdicionados.push(nomeAmigo);
    amigosIncluidos.innerHTML = `${listagemAmigosAdicionados.join(', ')}`;

    let relacaoAmigos = document.querySelector('#relacao-amigos');
    relacaoAmigos.innerHTML = '';

    listarDaRelacaoEntreAmigos();

    campoNomeAmigo.value = '';
}

function embaralharAmigos(listaAmigosEmbaralhados) {
    return listaAmigosEmbaralhados.sort(() => Math.random() - 0.5);
}

function sortear() {
    embaralharAmigos(listagemAmigosAdicionados);
    let listaAmigosSorteio = document.querySelector('#lista-amigos-sorteio');
    listaAmigosSorteio.innerHTML = '';

    for (let contador = 0; contador < listagemAmigosAdicionados.length; contador++) {
        
        if ((listagemAmigosAdicionados.length - 1) == contador) {
            listaAmigosSorteio.innerHTML = listaAmigosSorteio.innerHTML += `${listagemAmigosAdicionados[contador]} -> ${listagemAmigosAdicionados[0]} <br/>`;
        } else {
            listaAmigosSorteio.innerHTML = listaAmigosSorteio.innerHTML += `${listagemAmigosAdicionados[contador]} -> ${listagemAmigosAdicionados[contador + 1]} <br/>`;
        }
    }
}

function reiniciar() {
    document.querySelector('#lista-amigos-incluidos').innerHTML = '';
    document.querySelector('#lista-amigos-sorteio').innerHTML = '';
    document.querySelector('#relacao-amigos').innerHTML = '';
    botaoReiniciar.setAttribute('disabled', true);
    listagemAmigosAdicionados = [];
}

function removerAmigo(amigo) {
    listagemAmigosAdicionados.splice(listagemAmigosAdicionados.indexOf(amigo), 1);

    let relacaoAmigos = document.querySelector('#relacao-amigos');

    document.querySelector('#lista-amigos-incluidos').innerHTML = '';
    relacaoAmigos.innerHTML = '';

    listarDaRelacaoEntreAmigos();
}

function editarAmigo(amigoAtual) {
    let alterarNomeAmigo = listagemAmigosAdicionados.indexOf(amigoAtual);
    listagemAmigosAdicionados.splice(alterarNomeAmigo, 1);

    campoNomeAmigo.value = amigoAtual;

    campoMensagemAlerta.innerHTML = `<p class="container__alert">Atenção, você está editando o amigo ${amigoAtual}</p>`;

    botaoSortear.setAttribute('disabled', true);
    botaoReiniciar.setAttribute('disabled', true);
    botaoAdicionar.textContent = 'Atualizar';
}

function listarDaRelacaoEntreAmigos() {
    let relacaoAmigos = document.querySelector('#relacao-amigos');

    for (let contador = 0; contador < listagemAmigosAdicionados.length; contador++) {
        relacaoAmigos.innerHTML += `
            <tr>
                <td>00${contador + 1}</td>
                <td>${listagemAmigosAdicionados[contador]}</td>
                <td><a href="#" onclick="editarAmigo('${listagemAmigosAdicionados[contador]}')" class="container__link container__link-blue">Editar</a></td>
                <td><a href="#" onclick="removerAmigo('${listagemAmigosAdicionados[contador]}')" class="container__link container__link-red">Apagar</a></td>
            </tr>
        `;
    }
}