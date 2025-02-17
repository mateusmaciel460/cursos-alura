<?php

require 'autoload.php';

use BancoOnline\Modelos\Conta\Titular;

$titular1 = new Titular('Mateus', '888.888.888-88');
$nomeTitular1 = $titular1->nome;
$cpfTitular1 = $titular1->cpf;

$titular2 = new Titular('Fernando', '777.777.777-77');
$nomeTitular2 = $titular2->nome;
$cpfTitular2 = $titular2->cpf;