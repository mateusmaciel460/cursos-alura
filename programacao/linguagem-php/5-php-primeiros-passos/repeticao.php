<?php 

$pessoas = [
    0 => 'Mateus',
    1 => 'Fernando',
    2 => 'Paulo',
    3 => 'Gustavo',
    4 => 'André'
];

echo "-------------------------" . PHP_EOL;

for ($contador = 0; $contador < count($pessoas); $contador++) {
    echo ($contador + 1) . ". " . $pessoas[$contador] . PHP_EOL;
}

echo "-------------------------" . PHP_EOL;

foreach ($pessoas as $numeral => $nomePessoas) {
    echo ($numeral + 1) . ". $nomePessoas" . PHP_EOL;
}

echo "-------------------------" . PHP_EOL;

$contador = 0;

while ($contador <= (count($pessoas) - 1)) {
    echo $contador . PHP_EOL;
    $contador++;
}

$numeroSecreto = (int) 5;
$chute = (int) 0;
$tentativas = (int) 1;

do {    
    echo "-------------------------" . PHP_EOL;
    echo "Acerte o número secreto: ";
    $chute = fgets(STDIN);

    if ($chute == $numeroSecreto) {
        break;
    } else {
        if ($chute > $numeroSecreto) {
            echo "O número secreto é menor que $chute" . PHP_EOL;
        } else {
            echo "O número secreto é maior que $chute" . PHP_EOL;
        }

        $tentativas++;
    }
} while ($numeroSecreto != $chute);

$palavraTentativa = $tentativas > 1 ? 'tentativas' : 'tentativa';

echo "Parabéns, você acertou o número secreto $numeroSecreto com $tentativas $palavraTentativa" . PHP_EOL;