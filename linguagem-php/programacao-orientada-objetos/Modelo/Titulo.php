<?php 

class Titulo 
{
    private array $notas;

    public function __construct(
        public readonly string $nome,
        public readonly int $ano,
        public readonly Genero $genero
    )
    {
        $this->notas = [];
    }

    public function adicionarNota(float $nota)
    {
        $this->notas[] = $nota;
    }

    public function mediaNota() : float
    {
        $quantidadeNotas = count($this->notas);
        $calculoMediaNota = array_sum($this->notas) / $quantidadeNotas;

        return $calculoMediaNota;
    }

    public function duracaoEmMinutos(): int 
    {
        return 0;
    }
}