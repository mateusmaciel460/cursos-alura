<?php 

abstract class ContaBancaria 
{
    protected int $saldoAtual;

    public function __construct(
        public readonly string $nomeTitular,
        public readonly int $saldo,
        public readonly int $numero,
        public readonly string $nomeBanco,
        public readonly string $cpf,
        public readonly TipoConta $tipoConta
    )
    {
        $this->saldoAtual = $saldo; 
    }

    public function depositar($deposito): int {
        if ($deposito > 0) {
            return $this->saldoAtual += $deposito;
        } else {
            return $this->saldoAtual;
        }
    }

    public function sacar($saque): int {
        if ($saque < $this->saldoAtual) {
            return $this->saldoAtual -= $saque;
        } else {
            return $this->saldoAtual;
        }
    }

    public function visualizarSaldoBancario(): int {
        return $this->saldoAtual;
    }

    // Não tem taxa.
    public function calcularTaxaMensal(): int {
        return $this->saldoAtual;
    }
}