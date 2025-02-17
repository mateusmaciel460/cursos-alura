<?php 

$nome = 'Mateus Maciexl';

echo "--------------------------------------------";

// Verificar se uma palavra x está em uma string
$verificarFamilia = str_contains($nome, 'Maciels') ? "$nome pertence é da família Maciel" : "$nome não é da família Maciel";
echo PHP_EOL . $verificarFamilia;

// Verificar se a string começa com a palavra x
$verificarInicioDaPalavra = str_starts_with($nome, 'Ma') ? "A palavra Ma começa em $nome" : "A palavra Ma não começa em $nome";
echo PHP_EOL . $verificarInicioDaPalavra;

// Verificar se uma string termina com a palavra x 
$verificarFimPalavra = str_ends_with($nome, 'el') ? "A palavra el termina em $nome" : "A palavra el não termina em $nome";
echo PHP_EOL . $verificarFimPalavra;

echo PHP_EOL . "--------------------------------------------\n";