<?php

echo "-------------------------------------------\n";

// If, else e else
$nota1 = (float) 6.6;
$nota2 = (float) 7.2;
$media = ($nota1 + $nota2) / 2;

if ($media > 0 && $media < 6) {
    echo "Você teve um desempenho ruim, média: $media\n";
} else if ($media >= 6 && $media <= 7) {
    echo "Você teve um desempenho bom, média: $media\n";
} else if ($media >= 8 && $media <= 10) {
    echo "Você teve um excelente desempenho, $media\n";
} else {
    echo "Por gentileza, informe notas maiores que 0 e menores/igual a 10\n";
}

// match express

echo "-------------------------------------------\n";

$tituloMusica = "Redenção";

$bandaArtistaMusica = match ($tituloMusica) {
    "Redenção" => "Projeto Sola",
    "Digno de tudo" => "Fhop Music",
    "ARAFORMA" => "Calmará, Salomão, Coletivo Candiero"
};

echo "A música $tituloMusica é banda/artista: $bandaArtistaMusica\n";

// Switch Case

echo "-------------------------------------------\n";

$opcaoEscolhida = 1; // 1 até 4 (somar, subtrair, multiplicar e dividir)

$valor1 = (int) 5;
$valor2 = (int) 3;

switch ($opcaoEscolhida) {
    case 1:
        $somarValores = $valor1 + $valor2;
        echo "$valor1 + $valor2 = $somarValores\n";
        break;
    case 2:
        $subtrairValores = $valor1 - $valor2;
        echo "$valor1 - $valor2 = $subtrairValores\n";
        break;
    case 3:
        $multiplicarValores = $valor1 * $valor2;
        echo "$valor1 * $valor2 = $multiplicarValores\n";
        break;
    case 4:
        $dividirValores = $valor1 / $valor2;
        echo "$valor1 / $valor2 = $dividirValores\n";
        break;
    default:
        echo "Nenhuma opção encontrada!\n";
        break;
}

// Operador Ternário

echo "-------------------------------------------\n";

$tentativa = 3;

$palavraTentativa = $tentativa > 1 ? "tentativas" : "tentativa";

echo "Você teve $tentativa $palavraTentativa\n";

echo "-------------------------------------------\n";