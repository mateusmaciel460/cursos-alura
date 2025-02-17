<?php

namespace BancoOnline\Modelos\Conta;

use BancoOnline\Traits\ContaBancariaTrait;

class ContaPoupanca extends ContaBancaria
{
    use ContaBancariaTrait;

    public function __construct(
        Titular $titular,
        int $numeroConta
    )
    {
        parent::__construct($titular, $numeroConta);
    }
}