<?php 

require __DIR__ . '/Enumeracao/Genero.php';
require __DIR__ . '/Modelo/Titulo.php';
require __DIR__ . '/Modelo/Serie.php';
require __DIR__ . '/Modelo/Filme.php';
require __DIR__ . '/Calculo/Calculadora.php';

$filme = new Filme("De Volta para o Futuro", 1985, Genero::FiccaoCientifica, 116);
$filme->adicionarNota(5);
$filme->adicionarNota(8);
$filme->adicionarNota(2);

$serie = new Serie("ICarly", 2007, Genero::Sitcom, 6, 20, 575);
$serie->adicionarNota(3);
$serie->adicionarNota(7);
$serie->adicionarNota(5);

$calculadora = new Calculadora();
$calculadora->incluir($filme);
$calculadora->incluir($serie);
$duracao = $calculadora->duracao();

echo "**************************************\n";
echo "1 - Filme: $filme->nome\n";
echo "Ano do filme: $filme->ano\n";
echo "Tempo em minutos do filme: $filme->tempoEmMinutos min\n";
echo "**************************************\n";
echo "2 - Série: $serie->nome\n";
echo "Ano do filme: $serie->ano\n";
echo "Tempo em minutos por episódio: $serie->minutosPorEpisodio min\n";
echo "**************************************\n";

echo "Para maratonar [$filme->nome e $serie->nome], você precisa de $duracao minutos.\n";