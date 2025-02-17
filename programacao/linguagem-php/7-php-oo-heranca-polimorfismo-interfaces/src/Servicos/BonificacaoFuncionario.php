<?php

namespace BancoOnline\Servicos;

use BancoOnline\Modelos\Colaborador\Funcionario;

class BonificacaoFuncionario 
{
    private int $totalBonificacao = 0;
    
    public function incluir(Funcionario $funcionario): void
    {
        $this->totalBonificacao += $funcionario->calcularBonificacao();
    }

    public function retornarTotalBonificacao(): int {
        return $this->totalBonificacao;
    }
}