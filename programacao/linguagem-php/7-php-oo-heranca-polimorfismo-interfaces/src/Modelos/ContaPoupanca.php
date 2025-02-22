<?php 

namespace WebBank\Modelos;

class ContaPoupanca extends Conta 
{
    private float $taxaRendimento = 0.3;

    public function calcularRendimento(): float 
    {
        return $this->taxaRendimento * $this->saldo;
    }
}