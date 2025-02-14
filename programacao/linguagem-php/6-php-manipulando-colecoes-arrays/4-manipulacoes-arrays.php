<?php

$nota1 = [
    'Mateus1' => 2,
    'Fernando' => 9,
    'Paulo' => 6,
    'André' => 7
];

$nota2 = [
    'Mateus' => 20,
    'Fernando' => 91,
    'Paulo' => 64,
    'André' => 7
];

$notaIntermediaria = [
    'Túlio Maravilha' => 7,
    'Rafael' => 9,
    'Mateus1' => 11
];

// Quando o elemento for modificado
$elementosDiferentes = array_diff($nota1, $nota2);
var_dump($elementosDiferentes);

echo "------------------------\n";

// Quando a chave for modificada
$chavesDiferentes = array_diff_key($nota1, $nota2);
var_dump($chavesDiferentes);

echo "------------------------\n";

// Quando a chave e o elemento for modificado
$elementoChaveDiferente = array_diff_assoc($nota1, $nota2);
var_dump($elementoChaveDiferente);

echo "------------------------\n";

// Pegar chave e valor de um array
$chavesArrayNota1 = array_keys($nota1);
$elementosArrayNota2 = array_values($nota2);

// Combinar chave e valores que foram separados
$combinarArrayNota1Nota2 = array_combine($chavesArrayNota1, $elementosArrayNota2);
var_dump($combinarArrayNota1Nota2);

echo "------------------------\n";

// Juntando dois array com a operação (+)
$juntarArrays = $nota1 + $notaIntermediaria;
var_dump($juntarArrays);

echo "------------------------\n";

// Inverter chave para elemento, e elemento para chave
$inverterArrays = array_flip($nota1);
var_dump($inverterArrays);

echo "------------------------\n";

// Vai pegar a chave do primeiro array, e o elemento do segundo array = novo array
$mergeandoArrays = array_merge($nota1, $nota2);
var_dump($mergeandoArrays);

echo "------------------------\n";

// Spread Operator - inserir um array no seu estado original no array
$novoArray = [...$mergeandoArrays];
var_dump($novoArray);