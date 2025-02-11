<?php 

function criaFilme(string $nome, int $ano, string $genero, int $duracao, array $notas, bool $plano): array {
    return [
        "nome" => $nome,
        "ano" => $ano,
        "genero" => $genero,
        "duracao" => $duracao,
        "notas" => $notas,
        "plano" => $plano
    ];
}

function verificarInclusaoPlano(bool $plano, int $ano): bool {
    return $plano || $ano > 2024;
}

function exibirMensagemAno(int $ano, string $nome): string {
    if ($ano > 2024) {
        return "$nome é novo";
    } else if ($ano >= 2022 && $ano <= 2024) {
        return "$nome é recente";
    } else {
        return "$nome é antigo";
    }
}