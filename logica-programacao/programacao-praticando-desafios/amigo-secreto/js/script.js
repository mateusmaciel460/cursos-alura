let campoNomeAmigo = document.querySelector("#nome-amigo");
let mensagem = document.querySelector("#mensagem");
let listaAmigosAdicionados = [];

function verificarCampoAdicionar(nomeAmigo, mensagem, amigosIncluidos) {
    let verificarAmigo = listaAmigosAdicionados.includes(nomeAmigo);
    let verificarAmigoRepetido = listaAmigosAdicionados.join(",").toLowerCase().includes(nomeAmigo);

    if (nomeAmigo == "") {
        mensagem.innerHTML = '<p class="conteudo__mensagem">Preencha o nome de um amigo</p>';
        return;
    }

    if (verificarAmigo || verificarAmigoRepetido) {
        mensagem.innerHTML = `<p class="conteudo__mensagem">${nomeAmigo} já existe, tente outro</p>`;
        return;
    }

    listaAmigosAdicionados.push(nomeAmigo);
    amigosIncluidos.innerHTML = `${listaAmigosAdicionados.join(", ")}`;
    mensagem.innerHTML = "";
}

function listarRelacaoAmigos(relacaoAmigosAdicionados) {
    for (let contador = 0; contador < listaAmigosAdicionados.length; contador++) {
        relacaoAmigosAdicionados.innerHTML += `
            <tr>
                <td>0${contador+1}</td>
                <td>${listaAmigosAdicionados[contador]}</td>
                <td>
                    <button onclick="editarAmigo('${listaAmigosAdicionados[contador]}', ${contador})" class="conteudo__botao-azul">Editar</button>
                    <button onclick="excluirAmigo(${contador})" class="conteudo__botao-laranja">Excluir</button>
                </td>
            </tr>
        `;
    } 
}

function excluirAmigo(idAmigo) {
    if (idAmigo > - 1) {
        listaAmigosAdicionados.splice(idAmigo, 1);
    }

    let relacaoAmigosAdicionados = document.querySelector("#relacao-amigos-adicionados");

    document.querySelector("#amigos-incluidos").innerHTML = `${listaAmigosAdicionados.join(", ")}`;
    document.querySelector("#amigos-sorteados").innerHTML = "";
    relacaoAmigosAdicionados.innerHTML = "";

    listarRelacaoAmigos(relacaoAmigosAdicionados);
}

function editarAmigo(amigoAtual, idAmigo) {
    listaAmigosAdicionados.splice(idAmigo, 1);

    let botaoAdicionar = document.querySelector("#botao-adicionar");

    campoNomeAmigo.value = amigoAtual;

    document.querySelector("#nome-amigo").value = amigoAtual;
    document.querySelector("#botao-sortear").setAttribute("disabled", true);
    document.querySelector("#botao-reiniciar").setAttribute("disabled", true);

    mensagem.innerHTML = `<p class="conteudo__mensagem">Atenção, você está editando o amigo ${amigoAtual}</p>`;

    botaoAdicionar.textContent = "Editar";
}

function adicionar() {
    let nomeAmigo = document.querySelector("#nome-amigo").value;
    let amigosIncluidos = document.querySelector("#amigos-incluidos");

    let relacaoAmigosAdicionados = document.querySelector("#relacao-amigos-adicionados");
    relacaoAmigosAdicionados.innerHTML = "";

    verificarCampoAdicionar(nomeAmigo, mensagem, amigosIncluidos);
    listarRelacaoAmigos(relacaoAmigosAdicionados);

    document.querySelector("#nome-amigo").value = "";

    document.querySelector("#botao-sortear").removeAttribute("disabled");
    document.querySelector("#botao-reiniciar").removeAttribute("disabled");
    document.querySelector("#botao-adicionar").textContent = "Adicionar";
}

function listagemAmigosSorteados(quantidadeAmigosAdicionados, amigosSorteados) {
    amigosSorteados.innerHTML = "";

    for (let contador = 0; contador < listaAmigosAdicionados.length; contador++) {

        if ((quantidadeAmigosAdicionados - 1) == contador) {
            amigosSorteados.innerHTML += `${listaAmigosAdicionados[contador]} -> ${listaAmigosAdicionados[0]}<br/>`;
        } else {
            amigosSorteados.innerHTML +=`${listaAmigosAdicionados[contador]} -> ${listaAmigosAdicionados[contador + 1]}<br/>`;
        }
    }
}

function sortear() {
    embaralharLista(listaAmigosAdicionados);

    let amigosSorteados = document.querySelector("#amigos-sorteados");
    let quantidadeAmigosAdicionados = listaAmigosAdicionados.length;
    
    if (quantidadeAmigosAdicionados <= 3) {
        mensagem.innerHTML = '<p class="conteudo__mensagem">É necessário 4 amigos para sortear.</p>';
        return;
    }

    listagemAmigosSorteados(quantidadeAmigosAdicionados, amigosSorteados);
    document.querySelector("#botao-reiniciar").removeAttribute("disabled");
}

function embaralharLista(lista) {
    return lista.sort(() => Math.random() - 0.5);
}

function reiniciar() {
    listaAmigosAdicionados = [];
    mensagem.innerHTML = "";

    document.querySelector("#amigos-incluidos").innerHTML = "";
    document.querySelector("#amigos-sorteados").innerHTML = "";
    document.querySelector("#relacao-amigos-adicionados").innerHTML = "";
    document.querySelector("#botao-reiniciar").setAttribute("disabled", true);
}