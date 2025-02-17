<?php 

// strings numéricas, FINAL (here doc, now doc), addslashes, htmlentities
// str_replace, strtr

$texto = 'Hello, World';
$trocarPalavra = strtr($texto, ["Hello" => "Olá", "World" => "Mundo"]);

echo "-------------------------" . PHP_EOL;
echo "A frase: $texto" . PHP_EOL;
echo "A frase com limitação: $trocarPalavra" . PHP_EOL;
echo "-------------------------" . PHP_EOL;