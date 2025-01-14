<?php 

function criaFilme(string $nome, int $ano, string $genero): array {
    return [
        "nome" => $nome,
        "ano" => $ano,
        "genero" => $genero,
    ];
}

function retornarArrayEmOrdemCrescente(array $lista): array {
    sort($lista);
    return $lista;
}

function retornarMenorNumeroArray(array $lista): float {
    return min($lista);
}

function buscarPosicaoElemento(string $item, string $elementoBuscado) : int {
    return strpos($item, $elementoBuscado);
}

function retornarPalavraEntreDoisIntervalos(string $item, int $posicaoInicial, int $posicaoFinal) {
    return substr($item, $posicaoInicial, $posicaoFinal);
}