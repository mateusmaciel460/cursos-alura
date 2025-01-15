<?php

class Serie extends Titulo 
{
    public function __construct(
        string $nome,
        int $ano,
        Genero $genero,
        public readonly int $temporadas,
        public readonly int $episodiosPorTemporada,
        public readonly int $minutosPorEpisodio
    )
    {
        parent::__construct($nome, $ano, $genero);
    }

    public function duracaoEmMinutos(): int
    {
        return $this->temporadas * $this->episodiosPorTemporada * $this->minutosPorEpisodio;
    }
}