<?php 

// 1. Números pares
for ($i = 0; $i < 101; $i += 2) {
    echo "$i,";
}

echo PHP_EOL . "" . PHP_EOL;

// 2. Números ímpares
for ($i = 1; $i < 101; $i += 2) {
    echo "$i,";
}

echo PHP_EOL . "" . PHP_EOL;

// 3. Tabuada
$numeroTabuada = 5;
$contador = 1   ;

while ($contador <= 10) {
    echo "$numeroTabuada * $contador = " . ($numeroTabuada * $contador) . PHP_EOL;
    $contador++;
}

echo PHP_EOL . "" . PHP_EOL;

// 4. IMC
$peso = 130;
$altura = 1.75;
$imc = $peso / ($altura * $altura);

if ($imc < 18.5) {
    echo "IMC: $imc | Classificação magreza" . PHP_EOL;
} else if ($imc >= 18.5 && $imc <= 24.9) {
    echo "IMC: $imc | Classificação peso normal" . PHP_EOL;
} else if ($imc >= 25 && $imc <= 29.9) {
    echo "IMC: $imc | Classificação sobrepeso" . PHP_EOL;
} else if ($imc >= 30 && $imc <= 34.9) {
    echo "IMC: $imc | Classificação Obesidade I" . PHP_EOL;
} else if ($imc >= 35 && $imc <= 39.9) {
    echo "IMC: $imc | Classificação Obesidade II" . PHP_EOL;
} else if ($imc >= 40) {
    echo "IMC: $imc | Classificação Obesidade III" . PHP_EOL;
} else {
    echo "Ocorreu um erro :(" . PHP_EOL;
}