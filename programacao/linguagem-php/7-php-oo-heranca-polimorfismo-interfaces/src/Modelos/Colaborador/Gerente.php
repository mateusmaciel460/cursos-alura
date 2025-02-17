<?php

namespace BancoOnline\Modelos\Colaborador;

use BancoOnline\Interfaces\Autenticavel;

class Gerente extends Funcionario implements Autenticavel
{
    private string $senhaFalsa = '123';

    public function calcularBonificacao(): int
    {
        return 4000;
    }

    public function podeAutenticar(string $senha): bool
    {
        return $this->senhaFalsa === $senha;
    }
}