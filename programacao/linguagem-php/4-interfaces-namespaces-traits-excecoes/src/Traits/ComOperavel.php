<?php 

namespace BancoOnline\Traits;

trait ComOperavel 
{
    private int $saldoAtual;

    public function sacar(int $valor): void
    {
        if ($valor < $this->saldoAtual) {
            $this->saldoAtual -= $valor;
        }
    }

    public function depositar(int $valor): void
    {
        if ($valor > 0) {
            $this->saldoAtual += $valor;
        }
    }

    public function pegarSaldoAtual(): int {
        return $this->saldoAtual;
    }
}