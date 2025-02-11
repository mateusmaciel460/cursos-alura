<?php 

namespace BancoOnline\Modelos;

class ContaInvestimento extends Conta
{
    public function __construct(
        string $nomeTitular, 
        int $numeroConta,
        int $saldo
    )
    {
        parent::__construct($nomeTitular, $numeroConta, $saldo);
    }

    #[\Override]
    public function valorTaxaCobrada(): int
    {
        $operacaoTaxa = $this->pegarSaldoAtual() * 0.1;

        return $operacaoTaxa;
    }
}