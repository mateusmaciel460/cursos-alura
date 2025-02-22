<?php

namespace WebBank\Modelos;

class ContaCorrente extends Conta
{
    private float $limiteCredito = 500;

    public function calcularTarifaMensal(): float
    {
        return $this->limiteCredito * 0.3;
    }
}