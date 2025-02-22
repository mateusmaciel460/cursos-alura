<?php 

namespace WebBank\Servicos;

use WebBank\Modelos\Conta;

class CalculosEstatisticosBanco 
{
    private int $calculoTotal = 0;

    public function incluir(Conta $conta): void
    {
        $this->calculoTotal += $conta->retornarSaldo();
    }

    public function retornarSaldoTotalContas()
    {
        return $this->calculoTotal;
    }
}