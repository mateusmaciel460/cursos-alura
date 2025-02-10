<?php

// 1. Operadores de atribuição

$numero1 = 5;
$numero2 = 2;

echo "-----------------------------------\n";
echo "1. Operadores de atribuição\n\n";
echo "$numero1 + $numero2 = ".($numero1 += $numero2)."\n";
echo "$numero1 - $numero2 = ".($numero1 -= $numero2)."\n";
echo "$numero1 * $numero2 = ".($numero1 *= $numero2)."\n";
echo "$numero1 / $numero2 = ".($numero1 /= $numero2)."\n"; 
echo "$numero1 % $numero2 = ".($numero1 %= $numero2)."\n"; 
echo "-----------------------------------\n";

// 2. Operadores aritméticos

$somarNumeros = $numero1 + $numero2;
$subtrairNumeros = $numero1 - $numero2;
$multiplicarNumeros = $numero1 * $numero2;
$dividirNumeros = $numero1 / $numero2;
$restoNumeros = $numero1 % $numero2;
$potenciaNumero = $numero1 ** $numero2;

echo "2. Operadores aritméticos\n\n";
echo "$numero1 + $numero2 = $somarNumeros\n";
echo "$numero1 - $numero2 = $subtrairNumeros\n";
echo "$numero1 * $numero2 = $multiplicarNumeros\n";
echo "$numero1 / $numero2 = $dividirNumeros\n";
echo "$numero1 % $numero2 = $restoNumeros\n";
echo "$numero1 elevado a $numero2 = $potenciaNumero\n";
echo "-----------------------------------\n";

// 3. Operadores de comparação
echo "3. Operadores de comparação\n\n";

$numero1 = 1; 
$numero2 = 5;

if ($numero1 >= $numero2 ) {
    echo "$numero1 maior ou igual a $numero2\n";
} else if ($numero1 <= $numero2) {
    echo "$numero1 menor ou igual $numero2\n";
} else {
    echo "Ocorreu um erro!\n";
}

if ($numero1 != $numero2) {
    echo "$numero1 é diferente de $numero2\n";
} else {
    echo "$numero1 é igual ao $numero2\n";
}

echo "-----------------------------------\n";

// 4. Operadores lógicos
echo "4. Operadores lógicos\n\n";

$numero1 = 2; 
$numero2 = 7;

if ($numero1 > 4 || $numero2 > 8) {
    echo "$numero1 é maior que 4 ou $numero2 é menor que 8\n";
} else if ($numero1 < 3 && $numero2 < 8) {
    echo "$numero1 é maior que 4 e $numero2 é menor que 8\n";
}

$temCarro = false;

if (!($temCarro)) {
    echo "Ele não tem carro, mas estou dizendo que ele tem.\n";
} else {
    echo "Ele tem carro, mas estou dizendo que não tem.\n";
}

echo "-----------------------------------\n";