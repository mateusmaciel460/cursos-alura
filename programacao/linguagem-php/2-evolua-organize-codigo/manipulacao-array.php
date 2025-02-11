<?php 

$numeros = [15, 4, 5, 9, 11];

function criaFilme(string $nome, int $ano, string $genero) {
    return [
        "nome" => $nome,
        "ano" => $ano,
        "genero" => $genero
    ];
}

$filme = criaFilme("Filme: De Volta Para o Futuro.", 1985, "Ficção Científica");

// 1. Números em ordem crescente
echo "-----------------------------\n";
echo "1. Números em ordem crescente\n\n";

sort($numeros);
print_r($numeros);

// 2. Menor número de um array
echo "-----------------------------\n";
echo "2. Menor número de um array\n\n";

echo "O menor número do array é ".min($numeros)."\n";
echo "-----------------------------\n";

// 3. Maior número de um array
echo "3. Maior número de um array\n\n";

echo "O maior número do array é ".max($numeros)."\n";
echo "-----------------------------\n";

// 4. Buscar posição de uma letra 
echo "4. Buscar posição de uma letra\n\n";

$letraEscolhida = "a";
$posicaoLetraEscolhida = strpos($filme["nome"], $letraEscolhida);
echo "A letra '$letraEscolhida' está na posição $posicaoLetraEscolhida\n"; 
echo "-----------------------------\n";

// 5. Intervalo entre uma letra até outra letra
echo "5. Intervalo entre uma letra até outra letra\n\n";

$posicaoDoisPontos = strpos($filme["nome"], ":");
$posicaoPontoFinal = strpos($filme["nome"], ".");
$tituloFilme = substr($filme["nome"], $posicaoDoisPontos + 2, $posicaoPontoFinal);

echo "$tituloFilme\n";

echo "-----------------------------\n";