<?php

namespace BancoOnline\Modelos\Conta;

use BancoOnline\Modelos\Pessoa;

class Titular extends Pessoa
{
    public function __construct(
        string $nome,
        string $cpf
    )
    {
        parent::__construct($nome, $cpf);
    }
}