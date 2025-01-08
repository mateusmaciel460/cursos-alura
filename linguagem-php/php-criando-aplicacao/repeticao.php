<?php 

$nomePessoas = ["Mateus", "Lucas", "André", "Gustavo", "Filipe"];

// For (Para)
echo "--------------------------------------------\n";

for ($i = 0; $i < count($nomePessoas); $i++) {
    echo $i . " => " . $nomePessoas[$i] . "\n";
}

echo "--------------------------------------------\n";

// Foreach 

echo "--------------------------------------------\n";

foreach ($nomePessoas as $nota) {
    echo $nota . " \n";
}

// While (Enquanto) 

echo "--------------------------------------------\n";

$numeroSecreto = (int) 5;
$chute = (int) 0;

while ($chute != $numeroSecreto) {
    echo "\nChute um número: ";
    $chute = fgets(STDIN);

    if ($chute == $numeroSecreto) {
        echo "Você acertou, o número secreto é $numeroSecreto\n";
    } else {
        if ($chute > $numeroSecreto) {
            echo "\nO número secreto é menor que $chute";
        } else {
            echo "\nO número secreto é maior que $chute";
        }
    }
}

// Do While

$numeroSorteado = (int) rand(1, 10);
$chute = (int) 0;

do {
    echo "\nDigite um número entre 1 e 10: ";
    $chute = fgets(STDIN);

    if ($chute == $numeroSorteado) {
        break;
    } else {
        echo "O número sorteador não é $chute\n";
    }

} while ($numeroSecreto != $chute);

echo "Acertou, o número sorteado é $chute\n";