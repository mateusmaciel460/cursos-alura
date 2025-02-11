<?php

require "autoload.php";

use BancoOnline\Calculos\CalculadoraTaxaOperacao;
use BancoOnline\Calculos\CalculadoraValoresTaxa;
use BancoOnline\Modelos\ContaInvestimento;
use BancoOnline\Modelos\ContaPagamento;

// Conta Investimento
$contaInvestimento = new ContaInvestimento("Mateus Maciel", 1400, 4002);

$contaInvestimento->depositar(400); // 4002 + 400 = 4402
$contaInvestimento->sacar(20); // 4402 - 20 = 3382 

$contaInvestimentoNomeTitular = $contaInvestimento->nomeTitular;
$contaInvestimentoNumeroConta = $contaInvestimento->numeroConta;
$contaInvestimentoSaldo = $contaInvestimento->pegarSaldoAtual();

// Conta Pagamento
$contaPagamento = new ContaPagamento("Fernando da Silva", 5600, 2345);

$contaPagamento->depositar(200); // 2345 + 200 = 2545
$contaPagamento->sacar(40); // 2545 - 40 = 2505

$contaPagamentoNomeTitular = $contaPagamento->nomeTitular;
$contaPagamentoNumeroConta = $contaPagamento->numeroConta;
$contaPagamentoSaldo = $contaPagamento->pegarSaldoAtual();

// Calculadora Valores Taxa
$calculadoraValoresTaxa = new CalculadoraValoresTaxa();
$calculadoraValoresTaxa->incluir($contaInvestimento);
$calculadoraValoresTaxa->incluir($contaPagamento);

// 4382 x 0.1 = 438 ---- 2505 x 0.2 = 501 (438 + 501) = 939
$valoresTotalRecebidos = $calculadoraValoresTaxa->valoresTaxa();

// Calculadora Taxa Operacao
$calculadoraTaxaOperacao = new CalculadoraTaxaOperacao();
$taxaMensalContaInvestimento = $calculadoraTaxaOperacao->cobrarTaxaMensal($contaInvestimento);
$taxaMensalContaPagamento = $calculadoraTaxaOperacao->cobrarTaxaMensal($contaPagamento);

echo "---------------------------\n";

echo "Conta de Investimentos:\n\n";
echo "Nome do titular: $contaInvestimentoNomeTitular\n";
echo "Número da conta: $contaInvestimentoNumeroConta\n";
echo "Saldo da conta: R$ $contaInvestimentoSaldo\n";
echo "Taxa de uso mensal: R$ $taxaMensalContaInvestimento\n";

echo "---------------------------\n";

echo "Conta de Pagamentos:\n\n";
echo "Nome do titular: $contaPagamentoNomeTitular\n";
echo "Número da conta: $contaPagamentoNumeroConta\n";
echo "Saldo da conta: R$ $contaPagamentoSaldo\n";
echo "Taxa de uso mensal: R$ $taxaMensalContaPagamento\n";

echo "---------------------------\n";

echo "O banco online receberá: R$ $valoresTotalRecebidos das taxas cobradas\n";