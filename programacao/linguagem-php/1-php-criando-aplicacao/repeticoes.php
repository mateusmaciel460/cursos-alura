<?php

$nomePessoas = ['Mateus', 'Fernando', 'Gustavo', 'André'];
$numeros = [5, 4, 3, 7, 8];

echo "-------------------------------------------\n";
echo "1. Estrutura de repetição For\n\n";

for ($contador = 0; $contador < count($nomePessoas); $contador++) {
    echo "$contador - ".$nomePessoas[$contador]."\n";
}

echo "-------------------------------------------\n";
echo "2. Estrutura de repetição (Foreach)\n\n";

foreach ($numeros as $numero) {
    echo "$numero,";
}

echo "\n-------------------------------------------\n";
echo "3. Estrutura de repetição (While)\n\n";

$contador = 0;
while ($contador <= count($nomePessoas)) {
    echo "$contador,";
    $contador++;
}

echo "\n-------------------------------------------\n";
echo "4. Estrutura de repetição (Do while)\n\n";

$numeroSecreto = 5;
$chute = 0;

do {
    echo "Chute um número: ";
    $chute = fgets(STDIN);

    if ($chute == $numeroSecreto) {
        break;
    } else {
        echo "O número secreto não é $chute\n";
        sleep(2);
    }   

} while ($chute != $numeroSecreto);

echo "Acertou, parabéns!\n";