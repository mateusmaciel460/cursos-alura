<?php 

// 1. Função com retorno 
echo "----------------------------\n";
echo "1. Função com retorno: \n\n";

$valor1 = 5;
$valor2 = 10;

function somarNumeros($numero1, $numero2) {
    return $numero1 + $numero2;
}

$soma = somarNumeros($valor1, $valor2);
echo "$valor1 + $valor2 = $soma\n";

echo "----------------------------\n";

// 2. Função sem retorno
echo "2. Função sem retorno: \n\n";

function multiplicarNumeros($numero1, $numero2) {
    $soma = $numero1 + $numero2;

    echo "$numero1 + $numero2 = $soma\n";
}

multiplicarNumeros($valor1, $valor2);

echo "----------------------------\n";