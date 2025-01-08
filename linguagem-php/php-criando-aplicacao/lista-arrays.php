<?php 

// Declarando array de inteiros e strings
$numeros = [2, 4, 6, 8, 10];
$nomes = ["Mateus", "João", "Gustavo", "André"];


// Valores de números

echo "---------------------------------\n";

for ($i = 0; $i < count($numeros); $i++) {
    echo $i + 1 . ". " . $numeros[$i] . " \n";
}

// Valores de números

echo "---------------------------------\n";

for ($i = 0; $i < count($nomes); $i++) {
    echo $i + 1 . ". " . $nomes[$i] . "\n";
}

// Tipo diferente de array
$dadosPessoa = [
    "nome" => "Mateus",
    "cpf" => "000.000.000-00"
];

echo "---------------------------------\n";

echo "Nome: " . $dadosPessoa["nome"] . " | Cpf: " . $dadosPessoa["cpf"] . "\n";

echo "---------------------------------\n";