<?php 

$listaNotas = [
    'Mateus' => 5,
    'Lucas' => 8,
    'Fernando' => 3,
    'Paulo' => 9,
    'André' => 7,
];

function listagemAlunos($lista) {
    echo "---------------------------------" . PHP_EOL;
    $contador = 0;

    foreach ($lista as $nome => $nota) {
        echo "$nome | Nota: $nota" .  PHP_EOL;
        $contador++;
    }

    echo "---------------------------------" . PHP_EOL;
}

function ordenarNotasEmOrdemCrescente(int $nota1, int $nota2) {
    return $nota1 <=> $nota2; // decrescente = $nota2 <=> $nota1;
}

// sort, rsort, asort, arsort, ksort, krsort, usort 
asort($listaNotas);
listagemAlunos($listaNotas);