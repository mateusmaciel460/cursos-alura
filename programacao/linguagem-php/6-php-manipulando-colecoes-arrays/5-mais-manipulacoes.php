<?php

$nota1 = [
    0 => 6,
    1 => 3,
    2 => 10,
    3 => 9,
    4 => 7
];

// Adiciona um novo elemento no fim do array
array_push($nota1, 2);

// Adiciona um novo elemento no inicio do array
array_unshift($nota1, 4);

// Remove o último elemento do array
array_pop($nota1);

// Remove o primeiro elemento do array
array_shift($nota1);

var_dump($nota1);

echo "----------------------------------------------\n";

$dados = ['nome' => 'Mateus', 'idade' => 23, 'formacao' => 'EM'];

// Forma de uma tupla
list('nome' => $nome, 'idade' => $idade, 'formacao' => $formacao) = $dados; // 01
['nome' => $nome, 'idade' => $idade, 'formacao' => $formacao] = $dados; // 02

// extract vai extrair os dados colocados na tupla
extract($dados);
var_dump($nome, $idade, $formacao);

echo "----------------------------------------------\n";

// compact vai compactar os dados, separando cada em variáveis com seus valores
$dados2 = ['nome' => 'Túlio', 'idade' => 19, 'formacao' => 'ES'];
['nome' => $nome, 'idade' => $idade, 'formacao' => $formacao] = $dados2;
compact('nome', 'idade', 'formacao');
var_dump($nome, $idade, $formacao);