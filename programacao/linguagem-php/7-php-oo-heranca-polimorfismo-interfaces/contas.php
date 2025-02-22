<?php 

require './banco.php';

use WebBank\Modelos\{
    ContaPoupanca, ContaCorrente
};
use WebBank\Servicos\CalculosEstatisticosBanco;

// Conta Poupança
$contaPoupanca = new ContaPoupanca($conta1->numero, $cliente1);
$rendimentoContaPoupanca = $contaPoupanca->calcularRendimento();
$contaPoupanca->depositar(210);
$contaPoupanca->sacar(20); // 50 + 210 = 260 - 20 = 240

// Conta Corrente
$contaCorrente = new ContaCorrente($conta2->numero, $cliente2);
$taxaMensalContaCorrente = $contaCorrente->calcularTarifaMensal();
$contaCorrente->depositar(400);
$contaCorrente->sacar(30); // 50 + 400 = 450 - 30 = 420

// Transferência

// CP = 240 - 50 = 190 | CC = 420 + 50 = 470
$contaPoupanca->transferir($contaCorrente, 50);

// CC = 470 - 100 = 370 | CP = 190 + 100 = 290
$contaCorrente->transferir($contaPoupanca, 100);

$saldoContaPoupanca = $contaPoupanca->retornarSaldo();
echo "Conta Poupança: R$ $saldoContaPoupanca" . PHP_EOL;

$saldoContaCorrente = $contaCorrente->retornarSaldo();
echo "Conta Corrente: R$ $saldoContaCorrente" . PHP_EOL;

echo "-----------------------------------" . PHP_EOL;

$calculosEstatisticosBanco = new CalculosEstatisticosBanco();
$calculosEstatisticosBanco->incluir($contaPoupanca);
$calculosEstatisticosBanco->incluir($contaCorrente);

$saldoTotalBanco = $calculosEstatisticosBanco->retornarSaldoTotalContas();

echo "A soma total dos saldos cadastrados são: R$ $saldoTotalBanco" . PHP_EOL;