<?php 

$nome = "Mateus";
$idade = 16;

if ($idade >= 18) {
    echo "Você é maior de idade, $nome :)" . PHP_EOL;
    echo "Sua idade: $idade" . PHP_EOL;
} else if ($idade > 0 && $idade < 17) {
    echo "Você é menor de idade, $nome" . PHP_EOL;
    echo "Sua idade: $idade" . PHP_EOL;
} else {
    echo "Ocorreu um erro, informe uma idade válida!" . PHP_EOL;
    echo "Idade informada: $idade" . PHP_EOL;
}

echo "---------------------------------------------------" . PHP_EOL;

$numero1 = 5;
$numero2 = 2;
$opcao = 1;

switch ($opcao) {
    case 1:
        $somar = $numero1 + $numero2;
        echo "$numero1 + $numero2 = $somar" . PHP_EOL;
        break;
    case 2:
        $subtrair = $numero1 - $numero2;
        echo "$numero1 - $numero2 = $subtrair" . PHP_EOL;
        break;
    case 3:
        $multiplicar = $numero1 * $numero2;
        echo "$numero1 * $numero2 = $multiplicar" . PHP_EOL;
        break;
    case 4:
        $dividir = $numero1 / $numero2;
        echo "$numero1 / $numero2 = $dividir" . PHP_EOL;
        break;
    default:
        echo "Nenhuma opção encontrada!" . PHP_EOL;
        break;
}