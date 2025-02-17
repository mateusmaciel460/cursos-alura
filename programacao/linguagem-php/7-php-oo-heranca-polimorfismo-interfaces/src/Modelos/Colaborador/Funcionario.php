<?php

namespace BancoOnline\Modelos\Colaborador;

use BancoOnline\Modelos\Pessoa;

abstract class Funcionario extends Pessoa
{
    public function __construct(
        string $nome,
        string $cpf
    )
    {
        parent::__construct($nome, $cpf);
    }

    abstract public function calcularBonificacao(): int;
}