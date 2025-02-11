<?php 

class ContaPoupanca extends ContaBancaria
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
}