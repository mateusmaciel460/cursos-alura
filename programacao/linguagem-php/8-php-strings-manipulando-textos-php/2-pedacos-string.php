<?php 

$email = 'mateus@empresa.email.com';
$senha = '123';

// Descobrir a posição de uma string específica
$delimitador = strpos($email, '@');
$nome = substr($email, 0, $delimitador);

// Vai separar entre uma posição e outra (ex: @ até o fim)
$emailCorporativo = substr($email, $delimitador + 1);

echo "---------------------------------" . PHP_EOL;
echo "Nome: $nome" . PHP_EOL;
echo "Tipo de email: $emailCorporativo" . PHP_EOL;
echo "---------------------------------" . PHP_EOL;

// Nome e email em maiúsculo
echo "Nome: " . mb_strtolower($nome) . PHP_EOL;
echo "Tipo de email: " . mb_strtolower($emailCorporativo) . PHP_EOL;
echo "---------------------------------" . PHP_EOL;

// Nome e email em maiúsculo
echo "Nome: " . mb_strtoupper($nome) . PHP_EOL;
echo "Tipo de email: " . mb_strtoupper($emailCorporativo) . PHP_EOL;
echo "---------------------------------" . PHP_EOL;

// Verifica se a senha tem 8 ou + caracteres
$verificarQuantidadesCaracteres = strlen($senha) >= 8 ? "A senha tem 8 ou mais caracteres" : "A senha não tem 8 caracteres";
echo $verificarQuantidadesCaracteres . PHP_EOL;