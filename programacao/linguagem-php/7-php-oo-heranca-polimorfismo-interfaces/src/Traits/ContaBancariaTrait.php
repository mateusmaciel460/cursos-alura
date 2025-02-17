<?php 

namespace BancoOnline\Traits;

trait ContaBancariaTrait 
{
    private int $saldoAtual = 0;

    public function depositar(int $valor): void
    {
        if ($valor > 0) {
            $this->saldoAtual += $valor;
        }
    }

    public function sacar(int $valor): void
    {
        if ($valor < $this->saldoAtual) {
            $this->saldoAtual -= $valor;
        }
    }   

    public function retornarSaldo(): int {
        return $this->saldoAtual;
    }
}