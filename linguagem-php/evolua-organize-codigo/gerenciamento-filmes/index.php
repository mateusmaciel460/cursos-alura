<?php 

require __DIR__ . "/src/funcoes.php";

$filmes = criaFilme(
    nome: "Filme 01",
    ano: 2019,
    duracao: 2,
    notas: [],
    plano: true
);

$nomeFilme = (string) $filmes["nomeFilme"];
$anoLancamentoFilme = (int) $filmes["anoLancamentoFilme"];
$duracaoFilme = (int) $filmes["duracaoFilme"];
$notasFilme = $filmes["notasFilme"];
$planoPrime = $filmes["planoPrime"];
$generoFilme = match($nomeFilme) {
    "Filme 01" => "ação"
};

// Somando notas repassadas pelo argc no console
for ($contador = 1; $contador < $argc; $contador++) {
    $notasFilme[] = (float) $argv[$contador]."\n";
}

$notaFilme = array_sum($notasFilme) / ($argc - 1);

// Criando funções de checagem (checar (19).., exibir (28)...)
$planoIncluido = checarIncluidoNoPlano($planoPrime, $anoLancamentoFilme);

echo "**********************************\n";

echo "Nome: $nomeFilme\n";
echo "Ano Lançamento: $anoLancamentoFilme \n";
echo "Duração: $duracaoFilme"."h \n";
echo "Nota: $notaFilme \n";
echo "Gênero: $generoFilme\n";

exibirMensagemLancamento($anoLancamentoFilme);

echo "\n**********************************\n";