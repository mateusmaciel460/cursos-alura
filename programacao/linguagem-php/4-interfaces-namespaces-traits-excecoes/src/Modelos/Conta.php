<?php

namespace BancoOnline\Modelos;

use BancoOnline\Interfaces\Operavel;
use BancoOnline\Traits\ComOperavel;

abstract class Conta implements Operavel
{
    use ComOperavel;

    public function __construct(
        public readonly string $nomeTitular,
        public readonly int $numeroConta,
        public readonly int $saldo
    )
    {
        $this->saldoAtual = $saldo;
    }

    abstract public function valorTaxaCobrada(): int;
}