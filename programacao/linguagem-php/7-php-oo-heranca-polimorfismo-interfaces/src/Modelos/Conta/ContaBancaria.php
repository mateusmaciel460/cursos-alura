<?php

namespace BancoOnline\Modelos\Conta;

use BancoOnline\Interfaces\Operavel;
use BancoOnline\Traits\ContaBancariaTrait;

abstract class ContaBancaria implements Operavel
{
    use ContaBancariaTrait;

    function __construct(
        public readonly Titular $titular,
        public readonly int $numeroConta,
    )
    {}

    abstract public function sacar(int $valor): void;
    abstract public function depositar(int $valor): void;
}