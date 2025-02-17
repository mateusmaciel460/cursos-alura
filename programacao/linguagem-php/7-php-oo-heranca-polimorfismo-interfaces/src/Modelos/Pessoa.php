<?php 

namespace BancoOnline\Modelos;

abstract class Pessoa 
{
    public function __construct(
        public readonly string $nome,
        public readonly string $cpf
    )
    {}
}   