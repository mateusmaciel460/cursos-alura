let numeroMaximo = 5;
let numeroSecreto = gerarNumeroAleatorio();
let tentativas = 1;

function iniciarJogo() {
    alert("Boas vindas ao jogo do número secreto");
    
    let chute;

    while (chute != numeroSecreto) {
        chute = parseInt(prompt(`Escolha um número entre 1 e ${numeroMaximo}`));

        if (chute == numeroSecreto) {
            break;
        } else {
            if (chute < numeroSecreto) {
                alert(`O número secreto é maior que ${chute}`);
            } else {
                alert(`O número secreto é menor que ${chute}`);
            }

            tentativas++;
        }
    }

    let palavraTentativa = tentativas > 1 ? "tentativas" : "tentativa";
    alert(`Parabéns, você acertou o número secreto ${numeroSecreto} com ${tentativas} ${palavraTentativa}`);
}

function gerarNumeroAleatorio() {
    return parseInt(Math.random() * numeroMaximo + 1);
}