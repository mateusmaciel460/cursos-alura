let mensagem = document.querySelector('#mensagem');

function comprar() {
    let quantidade = document.querySelector('#quantidade').value;
    let tipo = document.querySelector('#tipo').value;
    let tipoIngresso = document.querySelector(`#tipo-${tipo}`);

    validacaoCampos(mensagem, quantidade, tipo, tipoIngresso);

    document.querySelector('#quantidade').value = '';
}

function comprarIngressoEspecifico(tipoIngresso, quantidade) {
    tipoIngresso.textContent = tipoIngresso.textContent - quantidade;
}

function validacaoCampos(mensagem, quantidade, tipo, tipoIngresso) {
    mensagem.textContent = '';

    let diferenca = tipoIngresso.textContent - quantidade;
    let palavraCadeira = quantidade > 1 ? 'cadeiras' : 'cadeira';

    if ((quantidade && tipo) == '') {
        mensagem.textContent = 'Preencha todos os campos!';
        return;
    }

    if (diferenca < 0) {
        mensagem.textContent = `Não temos ${quantidade} ${palavraCadeira} disponíveis para ${tipo}`;
        return;
    }

    comprarIngressoEspecifico(tipoIngresso, quantidade);
}