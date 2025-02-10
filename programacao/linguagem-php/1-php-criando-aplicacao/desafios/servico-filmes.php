<?php

// nome, ano, duracao, nota, genero

$nomeFilme = (string) "De Volta Para o Futuro";
$anoFilme = (int) 1985;
$duracaoFilme = (int) 106;
$generoFilme = match ($nomeFilme) {
    "De Volta Para o Futuro" => "Ficção Científica",
    default => "Desconhecido"
};

for ($contador = 0; $contador < $argc; $contador++) {
    $notas[] = $argv[$contador];
}

$notaFilme = (float) array_sum($notas) / ($argc - 1);

echo "------------------------\n";
echo "Filme: $nomeFilme\n";
echo "Ano de lançamento: $anoFilme\n";
echo "Duração: $duracaoFilme minutos\n";
echo "Nota: $notaFilme\n";
echo "Gênero: $generoFilme\n";
echo "------------------------\n";