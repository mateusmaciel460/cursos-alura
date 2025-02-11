<?php 

class CalculoSaldoBancario 
{
    private int $totalParaPagar = 0;

    public function incluir(ContaBancaria $conta): void {
        $this->totalParaPagar += $conta->calcularTaxaMensal();
    }

    public function totalPagarComTaxa(): int {
        return $this->totalParaPagar;
    }
}