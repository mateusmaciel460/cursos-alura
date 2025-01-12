let elementoProdutos = document.querySelector("#produtos");
let elementoQuantidade = document.querySelector("#quantidade");
let mensagem = document.querySelector("#mensagem");
let produtosAdicionados = document.querySelector("#produtos-adicionados");
let produtoPrecoTotal = document.querySelector("#preco-total");

let precoGeral = 0;

function adicionar() {
    let produtos = elementoProdutos.value;
    let quantidade = elementoQuantidade.value;

    let nomeProduto = dividirElementos(produtos, "-", 0);
    let precoProduto = dividirElementos(produtos, "R$", 1);

    if (quantidade < 0 || quantidade == "") {
        mensagem.innerHTML = `<p class="conteudo__mensagem" id="mensagem">Digite uma quantidade válida.</p>`;
        return;
    }

    mensagem.innerHTML = "";

    let precoTotal = precoProduto * quantidade;

    exibirItensAdicionadosAoCarrinho(quantidade, nomeProduto, precoProduto);
    calcularPrecoTotal(precoGeral, precoTotal);

    document.querySelector("#quantidade").value = "";
    document.querySelector("#botao-limpar").removeAttribute("disabled");
}

function limpar() {
    produtosAdicionados.innerHTML = "";
    produtoPrecoTotal.innerHTML = `Total: R$ ${0}`;
    document.querySelector("#botao-limpar").setAttribute("disabled", true);
}

function dividirElementos(produtos, separacao, posicao) {
    return produtos.split(`${separacao}`)[posicao];
}

function exibirItensAdicionadosAoCarrinho(quantidade, nomeProduto, precoProduto) {
    produtosAdicionados.innerHTML += `
    <li class="conteudo__menu-item">
        <span class="conteudo__span">${quantidade}x</span> ${nomeProduto} <span class="conteudo__span">R$${precoProduto}</span>
    </li>`;
}

function calcularPrecoTotal(precoGeral, precoTotal) {
    precoGeral = precoGeral + precoTotal;
    produtoPrecoTotal.textContent = `Total: R$ ${precoGeral}`;
}