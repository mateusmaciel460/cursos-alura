<?php 

require __DIR__ . "/funcoes.php";

$notas = [2, 5.4, 3, 5.2];

$filme = criaFilme(
    nome: "De Volta para o Futuro",
    ano: 1995,
    genero: "Ficção Científica"
);

echo "***************************************\n";
echo "1 - Array de números em ordem crescente\n\n";
$numerosEmOrdemCrescente = retornarArrayEmOrdemCrescente($notas);
var_dump($numerosEmOrdemCrescente);
echo "\n***************************************\n";

echo "2 - Retornar o menor número de um array\n";
$menorNumeroArray = retornarMenorNumeroArray($notas);
var_dump($menorNumeroArray);
echo "***************************************\n";

echo "3 - Buscar por um elemento (letra A em filme) \n";
$buscarPosicaoLetraA = buscarPosicaoElemento($filme['nome'], 'a');
var_dump($buscarPosicaoLetraA);
echo "***************************************\n";

echo "3 - Buscar por um elemento (V até a) \n";
$intervaloEntrePosicao = retornarPalavraEntreDoisIntervalos($filme['nome'], 0, $buscarPosicaoLetraA + 1);
var_dump($intervaloEntrePosicao);
echo "***************************************\n";