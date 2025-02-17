<?php 

namespace BancoOnline\Interfaces;

interface Autenticavel 
{
    public function podeAutenticar(string $senha): bool;
}