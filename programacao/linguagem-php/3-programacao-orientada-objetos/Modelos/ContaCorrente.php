<?php 

class ContaCorrente extends ContaBancaria
{
    public function __construct(
        string $nomeTitular,
        int $saldo, 
        int $numero,
        string $nomeBanco,
        string $cpf,
        TipoConta $tipoConta
    )
    {
        parent::__construct($nomeTitular, $saldo, $numero, $nomeBanco, $cpf, $tipoConta);
    }

    public function calcularTaxaMensal(): int
    {
        // 5800 + 58 = 5858
        return $this->saldoAtual += $this->saldoAtual * 0.01; // 5800 x 0.01 = 58 
    }
}