<?php 

require "./Modelos/ContaBancaria.php";
require "./Modelos/ContaPoupanca.php";
require "./Modelos/ContaCorrente.php";
require "./Enumeracoes/TipoConta.php";
require "./Calculos/CalculoSaldoBancario.php";

$contaPoupanca = new ContaPoupanca(
    "Mateus Maciel", 3400, 123, "Bradesco", 
    "000.000.000-00", TipoConta::Poupanca
);

$contaCorrente = new ContaCorrente(
    "João Paulo", 5700, 321, "Itaú", 
    "888.888.888-88", TipoConta::Corrente
);

$contaPoupanca->depositar(500); // 3400 + 500 = 3900
$contaPoupanca->sacar(300); // 3900 - 300 = 3600

$contaPoupancaNome = $contaPoupanca->nomeTitular;
$contaPoupancaSaldo = $contaPoupanca->visualizarSaldoBancario();
$contaPoupancaNumero = $contaPoupanca->numero;
$contaPoupancaBanco = $contaPoupanca->nomeBanco;
$contaPoupancaCpf = $contaPoupanca->cpf;

$contaCorrente->depositar(400); // 5700 + 400 = 6100
$contaCorrente->sacar(300); // 6100 - 300 = 5800

$contaCorrenteNome = $contaCorrente->nomeTitular;
$contaCorrenteSaldo = $contaCorrente->visualizarSaldoBancario();
$contaCorrenteNumero = $contaCorrente->numero;
$contaCorrenteBanco = $contaCorrente->nomeBanco;
$contaCorrenteCpf = $contaCorrente->cpf;

$calcularSaldoBancario = new CalculoSaldoBancario();
$calcularSaldoBancario->incluir($contaCorrente);
$calcularSaldoBancario->incluir($contaPoupanca);

$totalSaldoConta = $calcularSaldoBancario->totalPagarComTaxa();

echo "-------------------------------------------\n";
echo "Conta Poupança: \n\n";
echo "Titular: $contaPoupancaNome\n";
echo "Saldo: $contaPoupancaSaldo\n";
echo "Número: $contaPoupancaNumero\n";
echo "Banco: $contaPoupancaBanco\n";
echo "Cpf: $contaPoupancaCpf\n";

echo "-------------------------------------------\n";
echo "Conta Corrente: \n\n";
echo "Titular: $contaCorrenteNome\n";
echo "Saldo: $contaCorrenteSaldo\n";
echo "Número: $contaCorrenteNumero\n";
echo "Banco: $contaCorrenteBanco\n";
echo "Cpf: $contaCorrenteCpf\n";
echo "-------------------------------------------\n";
echo "As contas (poupança e corrente) tem um total de: R$ $totalSaldoConta\n";