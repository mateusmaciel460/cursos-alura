<?php 

namespace BancoOnline\Interfaces;

interface Operavel 
{
    public function sacar(int $valor): void;
    public function depositar(int $valor): void;
}