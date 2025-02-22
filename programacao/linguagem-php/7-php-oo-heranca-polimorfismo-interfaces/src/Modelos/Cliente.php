<?php 

namespace WebBank\Modelos;

class Cliente 
{
    public function __construct(
        public readonly string $nome, 
        public readonly string $cpf, 
        public readonly string $endereco
    )
    {}
}