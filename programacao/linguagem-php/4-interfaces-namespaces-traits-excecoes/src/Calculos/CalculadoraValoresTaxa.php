<?php

namespace BancoOnline\Calculos;

use BancoOnline\Modelos\Conta;

class CalculadoraValoresTaxa 
{
    private int $valorTotalDasTaxas = 0;

    public function incluir(Conta $conta): void {
        $this->valorTotalDasTaxas += $conta->valorTaxaCobrada();
    }
    
    public function valoresTaxa(): int {
        return $this->valorTotalDasTaxas;
    }
}