<?php

class Calculadora 
{
    private int $duracaoMaratona = 0;

    public function incluir(Titulo $titulo): void
    {
        $this->duracaoMaratona += $titulo->duracaoEmMinutos();
    }

    public function duracao(): int 
    {
        return $this->duracaoMaratona;
    }
}