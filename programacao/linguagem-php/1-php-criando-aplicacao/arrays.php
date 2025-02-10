<?php

echo "\n1. Digite seu nome: ";
$nome = (string) fgets(STDIN);

echo "2. Digite seu sobrenome: ";
$sobrenome = (string) fgets(STDIN);

$dados = [
    "nome" => $nome,
    "sobrenome" => $sobrenome
];

echo "----------------------------\n";
echo "Nome: ".$dados["nome"]."";
echo "Sobrenome: ".$dados["sobrenome"]."";
echo "----------------------------\n";