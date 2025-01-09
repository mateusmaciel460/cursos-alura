<?php

$nomeFilme = (string) "The Founder";
$anoLancamento =  (int) 2016;
$duracaoEmHoras = (int) 2;
$somarNotaFilme = (float) 0;
$generoFilme = match ($nomeFilme) {
    "The Founder" => "Documentário/Drama",
    default => "Desconhecido"
};

for ($i = 1; $i < $argc; $i++) {
    $somarNotaFilme += $argv[$i];
}

echo "--------------------------------------\n";

$notaFilme = ($somarNotaFilme) /($argc - 1);
echo "A nota final do filme foi: $notaFilme\n";

echo "--------------------------------------\n";

echo "Nome do filme: $nomeFilme\n";
echo "Ano de lançamento: $anoLancamento\n";
echo "Gênero do filme: $generoFilme\n";
echo "Duração do Filme: $duracaoEmHoras" . "h\n";

echo "--------------------------------------\n";