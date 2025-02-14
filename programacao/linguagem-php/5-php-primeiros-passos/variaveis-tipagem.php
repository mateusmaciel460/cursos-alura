<?php

$nome = (string) "Mateus";
$idade = (int) 23;
$nota = (float) 7.5;
$ultimasNotas = (array) [4, 5, 6];
$mensalidadePaga = (bool) true;

echo "-----------------------------------------\n";
echo "Nome: $nome | Tipo: " . gettype($nome) . PHP_EOL;
echo "Idade: $idade | Tipo: " . gettype($idade) . PHP_EOL;
echo "Nota: $nota | Tipo: " . gettype($nota) . PHP_EOL;
echo "-----------------------------------------\n";
echo "Variável últimas notas: " . PHP_EOL;
var_dump($ultimasNotas, gettype($ultimasNotas));

echo PHP_EOL . "Variável mensalidadePaga: " . PHP_EOL;
var_dump($mensalidadePaga, gettype($mensalidadePaga));