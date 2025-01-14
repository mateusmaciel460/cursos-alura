<?php

function exibirMensagemLancamento(int $ano): void {
    $mensagemPadrao = "Informação";

    if ($ano > 2024) {
        echo "$mensagemPadrao: Esse filme é um lançamento";
    } else if ($ano >= 2022 && $ano <= 2024) {
        echo "$mensagemPadrao: Esse filme é novo";
    } else {
        echo "$mensagemPadrao: Esse filme é antigo";
    }
}

function checarIncluidoNoPlano(bool $plano, int $ano): bool {
    return $plano || $ano < 2020;
}

function criaFilme(string $nome, int $ano, int $duracao, array $notas, bool $plano): array {
    return [
        "nomeFilme" => $nome, 
        "anoLancamentoFilme" => $ano,
        "duracaoFilme" => $duracao,
        "notasFilme" => $notas,
        "planoPrime" => $plano
    ];
}