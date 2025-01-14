<?php 

require __DIR__ . '/funcoes.php';

$filme = criaFilme(
    nome: "O Impossível",
    ano: 2012,
    genero: "Aventura"
);

echo "**********************************************************\n";
echo "1 - Transformar o array em Json\n\n";
echo json_encode($filme);
echo "\n********************************************************\n";

echo "**********************************************************\n";
echo "2 - Json em Array\n\n";
var_dump(json_decode('{"nome":"O Imposs\u00edvel","ano":2012,"genero":"Aventura"}', true));
echo "\n********************************************************\n";

echo "**********************************************************\n";
echo "3 - Adiciona algo no arquivo";
$filmeJson = json_encode($filme);
file_put_contents(__DIR__ . '/filme.json', $filmeJson);
echo "\n********************************************************\n";

echo "**********************************************************\n";
echo "3 - Ler o que está no arquivo";
$caminho = __DIR__ . '/filme.json';
$conteudo = file_get_contents($caminho);
$filmeDecodificado = json_decode($conteudo, true);

var_dump($filmeDecodificado);
echo "\n********************************************************\n";