let mensagem = document.querySelector("#mensagem");

function comprarTipoEspecifico(tipo, quantidade) {
    let tipoEspecifico = document.querySelector(`#valor-${tipo}`);
    let diferenca = tipoEspecifico.textContent - quantidade;

    verificarCampos(quantidade, mensagem, tipo, diferenca, tipoEspecifico);
}

function verificarCampos(quantidade, mensagem, tipo, diferenca, tipoEspecifico) {
    if (quantidade <= 0) {
        mensagem.innerHTML = `<p class="conteudo__mensagem">Digite um número positivo para quantidade, ${quantidade} não é válido!</p>`;
        return;
    }

    // Verificando o limite de cadeiras
    if (diferenca < 0) {
        mensagem.innerHTML = `<p class="conteudo__mensagem">Não temos ${quantidade} cadeiras disponível para ${tipo}</p>`;
        return;
    }

    mensagem.innerHTML = "";
    tipoEspecifico.textContent = tipoEspecifico.textContent - quantidade;
}

function comprarTipo() {
    return tipo == tipo ? comprarTipoEspecifico(tipo, quantidade) : "Ocorreu um erro!";
}

function comprar() {
    let tipo = document.querySelector("#tipo").value;
    let quantidade = document.querySelector("#quantidade").value;

    comprarTipoEspecifico(tipo, quantidade);
}