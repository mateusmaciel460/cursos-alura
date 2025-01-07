function comprar() {
    let tipoIngresso = document.querySelector('#tipo-ingresso').value;
    let quantidadeIngresso = document.querySelector('#qtd').value;    

    verificarTipoIngresso(tipoIngresso, quantidadeIngresso);
    document.getElementById('qtd').value = '';
}

function comprarTipo(quantidade, tipo) {
    let quantidadeTipo = document.querySelector(`#qtd-${tipo}`);
    let aviso = document.querySelector('#aviso')
    let calculoDiferenca = quantidadeTipo.textContent - quantidade;

    if (calculoDiferenca < 0) {
        aviso.innerHTML = `<p class="container__alert">Não temos ${quantidade} cadeiras disponíveis para ${tipo}!</p>`;
    } else if (quantidade < 0){ 
        aviso.innerHTML = `<p class="container__alert">A quantidade deve ser um número positivo!</p>`;
    } else {
        quantidadeTipo.textContent = calculoDiferenca;
        aviso.innerHTML = '';
    }
}

function verificarTipoIngresso(tipo, quantidade) {
    return tipo == tipo ? comprarTipo(quantidade, tipo) : console.log('Houve um erro!');
}