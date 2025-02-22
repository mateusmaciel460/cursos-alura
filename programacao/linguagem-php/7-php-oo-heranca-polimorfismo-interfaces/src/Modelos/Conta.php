<?php

namespace WebBank\Modelos;

class Conta 
{
    protected int $saldo = 50;

    public function __construct(
        public readonly string $numero,
        public readonly Cliente $titular
    )
    {}

    public function depositar(int $valor): int {
        if ($valor > 0) {
            return $this->saldo += $valor;
        }
    }

    public function sacar(int $valor): int 
    {
        if (($valor < $this->saldo) && ($valor > 0)) {
            return $this->saldo -= $valor;
        }
    }

    public function transferir(Conta $conta, int $valor): void 
    {
        if (($valor > 0) && ($valor < $this->saldo)) {
            $this->saldo -= $valor;
            $conta->saldo += $valor;
        }
    }

    public function retornarSaldo(): int 
    {
        return $this->saldo;
    }
}