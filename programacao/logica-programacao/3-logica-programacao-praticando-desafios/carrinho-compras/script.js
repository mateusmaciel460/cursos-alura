let mostrarProdutosCarrinho = document.querySelector('#mostrar-produtos-carrinho');
let mostrarPrecoGeral = document.querySelector('#mostrar-preco-geral');
let mensagem = document.querySelector('#mensagem');

let precoGeral = 0;

function adicionar() {
    let quantidade = document.querySelector('#quantidade').value;
    let produto = document.querySelector('#produto').value;

    let precoProduto = dividirProduto(produto, 1);
    let nomeProduto = dividirProduto(produto, 3);  
    
    validacaoCampos(quantidade, produto, quantidade, precoProduto, nomeProduto);

    document.querySelector('#quantidade').value = '';
}

function dividirProduto(produto, posicao) {
    return produto.split(' ')[posicao];
}

function exibirProdutosNoCarrinho(precoProduto, nomeProduto, quantidade) {
    let precoTotal = precoProduto * quantidade;
    precoGeral = precoGeral + precoTotal;

    mostrarProdutosCarrinho.innerHTML += `
    <li class="conteudo__menu-item">
        <span class="conteudo__destaque">${quantidade}x</span> ${nomeProduto} - <span class="conteudo__destaque">R$ ${precoProduto}</span>
    </li>`;

    mostrarPrecoGeral.textContent = `R$ ${precoGeral}`;
}

function validacaoCampos(quantidade, produto, quantidade, precoProduto, nomeProduto) {
    mensagem.textContent = '';

    if ((quantidade && produto) == '') {
        mensagem.textContent = 'Preencha todos os campos!';
        return;
    }

    exibirProdutosNoCarrinho(precoProduto, nomeProduto, quantidade);
    document.querySelector('#reiniciar').removeAttribute('disabled');
}

function reiniciar() {
    document.querySelector('#reiniciar').setAttribute('disabled', true);

    mensagem.textContent = '';
    mostrarProdutosCarrinho.textContent = '';
    mostrarPrecoGeral.textContent = 'R$ 0';
    precoGeral = 0;
}