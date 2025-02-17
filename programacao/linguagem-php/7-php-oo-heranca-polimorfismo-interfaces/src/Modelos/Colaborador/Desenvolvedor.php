<?php

namespace BancoOnline\Modelos\Colaborador;

class Desenvolvedor extends Funcionario
{
    public function calcularBonificacao(): int
    {
        return 2000;
    }
}