<?php

// 1. Estrutura condiconal (If, elseif, else)
echo "---------------------------------------------------\n";
echo "1. Estrutura condicional (if, elseif e else)\n\n";

$nota1 = 4;
$nota2 = 10;
$media = ($nota1 + $nota2) / 2;

if ($media > 0 && $media < 6) {
    echo "Você reprovado com uma péssima nota $media\n";
} else if ($media >= 6 && $media < 8) {
    echo "Você foi aprovado com uma boa nota $media\n";
} else if ($media >= 8 && $media <= 10) {
    echo "Você foi aprovado com uma ótima nota $media\n";
} else {
    echo "Ocorreu um erro!\n";
}

// 2. Match express
echo "---------------------------------------------------\n";
echo "2. Match Express\n\n";

$nomeMusica = "This Love";
$albumMusica = match($nomeMusica) {
    "This Love" => "Songs About Jane [...]",
    default => "Desconhecido"
};

echo "A música $nomeMusica | Album: $albumMusica\n";

// 3. Estrutura condicional swicth
echo "---------------------------------------------------\n";
echo "3. Estrutura condicional switch\n\n";

$opcaoEscolhida = 5;

$numero1 = 5;
$numero2 = 10;

switch ($opcaoEscolhida) {
    case 1:
        $somar = $numero1 + $numero2;
        echo "$numero1 + $numero2 = $somar\n";
        break;
    case 2:
        $subtrair = $numero1 - $numero2;
        echo "$numero1 - $numero2 = $subtrair\n";
        break;
    case 3:
        $multiplicar = $numero1 * $numero2;
        echo "$numero1 * $numero2 = $multiplicar\n";
        break;
    case 4:
        $dividir = $numero1 / $numero2;
        echo "$numero1 / $numero2 = $dividir\n";
        break;
    default:
        echo "Opção desconhecida\n";
        break;
}

echo "---------------------------------------------------\n";

// 4. Estrutura condicional (operador ternário)
echo "4. Estrutura condicional (operador ternário)\n\n";

$tentativa = 1;
$palavraTentativa = $tentativa > 1 ? "tentativas" : "tentativa";

echo "Você passou com $tentativa $palavraTentativa.\n";