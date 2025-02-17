<?php 

echo "-----------------------------------------" . PHP_EOL;

$url = "https://site.com.br";
echo "URL: $url" . PHP_EOL;

// Verifica se uma string x começa com a string y
$verificarInicialUrl = str_starts_with($url, 'https') ? 'A url começa com https' : 'A url não com https';
echo $verificarInicialUrl . PHP_EOL;

// Veririca se uma string x termina com a string y
$verificarFinalUrl = str_ends_with($url, '.br') ? 'A url termina com .br, então é domínio brasileiro' : 'A url não termina com .br, então não é domínio brasileiro';
echo $verificarFinalUrl . PHP_EOL;

// Verifica se uma string x existe em uma string y
$verificarSePalavraExiste = str_contains($url, 'site') ? "Sim, a palavra site existe na url" : "Não, a palavra site não existe na url";
echo $verificarSePalavraExiste . PHP_EOL;

echo "-----------------------------------------" . PHP_EOL;