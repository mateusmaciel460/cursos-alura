<?php

namespace BancoOnline\Calculos;

use BancoOnline\Interfaces\Operavel;

class CalculadoraTaxaOperacao
{
    public function cobrarTaxaMensal(Operavel $operavel) {
        $taxa = $operavel->pegarSaldoAtual();

        return $taxa * 0.045;
    }
}