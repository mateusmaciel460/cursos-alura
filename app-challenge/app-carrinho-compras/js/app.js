let listaProdutos = document.querySelector('#lista-produtos');
let valorTotal = document.querySelector('#valor-total');
let precoGeral = 0;

function adicionar() {
    let quantidade = document.querySelector('#quantidade').value;
    let produto = document.querySelector('#produto').value;
    let nomeProduto = produto.split('-')[0];
    let precoProduto = produto.split('R$')[1];
    let precoTotal = precoProduto * quantidade;

    listaProdutos.innerHTML += `
        <section class="carrinho__produtos__produto">
            <span class="texto-azul">${quantidade}x</span> ${nomeProduto} <span class="texto-azul">R$${precoProduto}</span>
        </section>
    `;

    precoGeral = precoGeral + precoTotal;
    valorTotal.innerHTML = `R$ ${precoGeral}`;
    document.querySelector('#quantidade').value = '';
}

function validarCampo() {
    let quantidade = document.querySelector('#quantidade').value;
    let produto = document.querySelector('#produto').value;
    let textoAviso = document.querySelector('#texto-aviso');

    let validarCampoVazio = quantidade == '' || produto == '';
    let validarCampoNumeracaoQuantidade = quantidade <= 0 || quantidade > 100;

    if (validarCampoVazio) {
        textoAviso.innerHTML = `
            <p class="texto-aviso">Preencha todos os campos</p>
        `;
    } else if (validarCampoNumeracaoQuantidade) {
        textoAviso.innerHTML = `
            <p class="texto-aviso">
                A quantidade deve ser entre 1 e 100
            </p>
        `;
    } else {
        textoAviso.innerHTML = '';
        adicionar();
    }
}

function limpar() {
    document.querySelector('#quantidade').value = '';
    listaProdutos.innerHTML = '';
    valorTotal.innerHTML = `R$ ${0}`;
}