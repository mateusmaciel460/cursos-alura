<?php

require './titulares.php';

use BancoOnline\Modelos\Conta\{
    ContaCorrente, ContaPoupanca
};

// Mateus
$contaCorrente = new ContaCorrente($titular1, 123, 400);
$titularContaCorrente1 = $contaCorrente->titular->nome;
$numeroContaCorrente1 = $contaCorrente->numeroConta;

$contaCorrente->depositar(300);
$contaCorrente->sacar(200);
$saldoContaCorrente1 = $contaCorrente->retornarSaldo();

// Fernando
$contaPoupanca = new ContaPoupanca($titular2, 321, 900);
$titularContaPoupanca1 = $contaPoupanca->titular->nome;
$numeroContaPoupanca1 = $contaPoupanca->numeroConta;

$contaPoupanca->depositar(600);
$contaPoupanca->sacar(300);
$saldoContaPoupanca1 = $contaPoupanca->retornarSaldo();

echo "$titularContaCorrente1 | Salário: R$ $saldoContaCorrente1" . PHP_EOL;
echo "$titularContaPoupanca1 | Salário: R$ $saldoContaPoupanca1" . PHP_EOL;