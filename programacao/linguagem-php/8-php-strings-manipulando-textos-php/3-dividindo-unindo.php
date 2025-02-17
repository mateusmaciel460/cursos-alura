<?php 

// explode, implode, trim, ltrim e rtrim

$nome = 'Mateus Maciel';
list($nome, $sobrenome) = explode(' ', $nome);
echo "Nome: $nome / Sobrenome: $sobrenome" . PHP_EOL;

$informacoes = 'Mateus,mateus@email.com,24,solteiro';
list($nome, $email, $idade, $status) = explode(',', $informacoes);
echo "Nome: $nome, email: $email, idade: $idade, status: $status" . PHP_EOL;

$telefones = [
    '(88) 8888-8888', '(95) 9999-9999', '(56) 3457-8769'
];

$listaTelefones = implode(', ', $telefones) . PHP_EOL;
echo $listaTelefones;