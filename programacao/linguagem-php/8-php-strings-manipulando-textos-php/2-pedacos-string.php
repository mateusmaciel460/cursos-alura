<?php 

// 2 -> substr, strpos, strlen, strtolower, trtoupper

$email = 'PAULOsilva@alura.com.br';
$senha = '12345678';

$delimitadorArroba = strpos($email, '@');
$nome = substr($email, 0, $delimitadorArroba);
$emailCorporativo = substr($email, $delimitadorArroba + 1);

echo "---------------------------------" . PHP_EOL;
echo $nome . "@" . $emailCorporativo . PHP_EOL;

$verificarQuantidadeCamposDigitados = mb_strlen($senha) >= 8 ? "A senha tem 8 caracteres" : "A senha não tem 8 caracteres";
echo $verificarQuantidadeCamposDigitados . PHP_EOL;

echo "Tudo em minúsculo: " . mb_strtolower($email). PHP_EOL;
echo "Tudo em maiúsculo: " . mb_strtoupper($nome) . PHP_EOL;

echo "---------------------------------" . PHP_EOL;