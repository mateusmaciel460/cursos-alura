<?php

// 1 - Operadores de atribuição
$primeiraNota = 5; 
$segundaNota = 8;

echo "-------------------\n";

$primeiraNota = 12;
$segundaNota = 5;

echo "1. [$primeiraNota e $segundaNota]\n";

$primeiraNota += 5; // 12 + 5 = 17 
$segundaNota -= 4; // 5 - 4 = 1

echo "2. [$primeiraNota e $segundaNota]\n";

$primeiraNota /= 17; // 17 / 17 = 1
$segundaNota *= 2; // 1 * 2 = 2

echo "3. [$primeiraNota e $segundaNota]\n";

echo "-------------------\n";

// 2- Operadores aritméticos
$nota1 = 12; 
$nota2 = 2;

$somarNotas = $nota1 + $nota2;
$subtrairNotas = $nota1 - $nota2;
$multiplicarNotas = $nota1 * $nota2;
$dividirNotas = $nota1 / $nota2;
$elevarPontenciaNota = $nota1 ** $nota2;
$restoNotaPorNota = $nota1 % $nota2;

echo "-------------------\n";

echo "$nota1 + $nota2 = $somarNotas\n";
echo "$nota1 - $nota2 = $subtrairNotas\n";
echo "$nota1 * $nota2 = $multiplicarNotas\n";
echo "$nota1 / $nota2 = $dividirNotas\n";
echo "$nota1 ** $nota2 = $elevarPontenciaNota\n";
echo "$nota1 % $nota2 = $restoNotaPorNota\n";

echo "-------------------\n";

// 3 - Operadores de comparação
$mediaAlunoJoao = (float) 5.8;
$mediaAlunoGustavo =  (float) 8.3;

$mensagemPadrao = "Ocorreu um problema :(";

// maior que (>), menor que (<), maior/igual (>=), menor/igual (<=)
if ($mediaAlunoJoao >= $mediaAlunoGustavo) {
    echo "$mediaAlunoGustavo maior/igual a $mediaAlunoGustavo\n";
} else if ($mediaAlunoJoao <= $mediaAlunoGustavo) {
    echo "$mediaAlunoJoao menor/igual a $mediaAlunoGustavo\n";
} else {
    echo $mensagemPadrao;
}

// != (diferente), == (igual)
if ($mediaAlunoGustavo != $mediaAlunoJoao) {
    echo "$mediaAlunoGustavo é diferente de $mediaAlunoJoao\n";
} else if ($mediaAlunoGustavo == $mediaAlunoJoao) {
    echo "$mediaAlunoGustavo é igual a $mediaAlunoJoao\n";
} else {
    echo $mensagemPadrao;
}

echo "-------------------\n";

// Operadores lógicos
$nomePessoa = "Mateus";
$idadePessoa = 12;
$paisPessoa = "BR";

$temCarro = false;

if ($idadePessoa >= 18 && $paisPessoa == "BR") {
    echo "$nomePessoa pode tirar habilitação, pois tem $idadePessoa anos e brasileiro!\n";
} else if (($idadePessoa < 18 && $idadePessoa >= 16) &&( $paisPessoa == "EUA")) {
    echo "$nomePessoa pode tirar habilitação, pois tem $idadePessoa anos e é americano!!\n";
} else if (($idadePessoa > 0 || $idadePessoa < 17) && $paisPessoa == "BR") {
    echo "No Brasil, $nomePessoa não pode nem sair de casa sozinha com $idadePessoa anos\n";
}

if (!($temCarro)) {
    echo "Nego que $nomePessoa tenha um carro, mas ele tem\n";
} else {
    echo "Nego que $nomePessoa não tenha um carro, mas ele não tem!\n";
}

// Operadores de incremento e decremento

echo "-------------------\n";

$mediaAluno = (float) 3;

if ($mediaAluno >= 8 && $mediaAluno <= 10) {
    echo "A média antiga do aluno era $mediaAluno\n";
    $mediaAluno--;
    echo "A média atual do aluno é $mediaAluno";
} else if ($mediaAluno >= 5 && $mediaAluno < 7.9) {
    echo "A média antiga do aluno era $mediaAluno\n";
    $mediaAluno++;
    echo "A média atual do aluno é $mediaAluno\n";
} else {
    echo "$mediaAluno é menor que 4.9, não podemos fazer nada!\n";
}