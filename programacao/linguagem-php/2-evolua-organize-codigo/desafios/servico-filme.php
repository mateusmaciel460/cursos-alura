<?php 

require "./src/funcoes.php";

$filme = criaFilme("De Volta Para o Futuro", 1985, "Ficção Científica", 106, [], true);

$nomeFilme = (string) $filme["nome"];
$anoFilme = (int) $filme["ano"];
$generoFilme = (string) $filme["genero"];
$duracaoFilme = (int) $filme["duracao"];
$planoFilme = (bool) $filme["plano"];
$notasFilme = (array) $filme["notas"];

$incluidoNoPlano = verificarInclusaoPlano($planoFilme, $anoFilme);
$mensagemAnoFilme = exibirMensagemAno($anoFilme, $nomeFilme);

for ($contador = 0; $contador < $argc; $contador++) {
    $notasFilme[] = (float) $argv[$contador];
}

$notaFilme = array_sum($notasFilme) / ($argc - 1);

echo "-------------------------\n";
echo "Nome do filme: $nomeFilme\n";
echo "Ano do filme: $anoFilme\n";
echo "Gênero do filme: $generoFilme\n";
echo "Duração do filme: $duracaoFilme minutos\n";
echo "Nota do filme: $notaFilme\n";
echo "Informativo: $mensagemAnoFilme\n";
echo "-------------------------\n";

if ($incluidoNoPlano) {
    echo "Incluido no plano: Sim\n";
} else {
    echo "Incluido no plano: Não\n";
}