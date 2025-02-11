<?php 

$filme = [
    "nome" => "De Volta Para o Futuro",
    "ano" => 1985,
    "genero" => "Ficção Científica"
];

// 1. Array em Json
echo "-----------------------------\n";
echo "1. Array em Json\n\n";

$arrayEmJson = json_encode($filme);
echo $arrayEmJson."\n";

echo "-----------------------------\n";

// 2. Json em Array
echo "2. Json em Array\n\n";

$json = '{"nome":"De Volta Para o Futuro","ano":1985,"genero":"Fic\u00e7\u00e3o Cient\u00edfica"}';
$jsonEmArray = json_decode($json, true);

var_dump($jsonEmArray);
echo "-----------------------------\n";

// 3. Criar um arquivo json
echo "3. Criar um arquivo Json\n\n";

$nomeArquivo = "filme";
$caminhoArquivo = __DIR__ . "/$nomeArquivo.json";
$criarArquivo = file_put_contents($caminhoArquivo, $arrayEmJson);

echo "O arquivo $nomeArquivo.json criado\n";
echo "-----------------------------\n";

// 4. Ler um arquivo json
echo "4. Ler um arquivo json\n\n";

$lerArquivo = file_get_contents($caminhoArquivo);
echo "Conteúdo arquivo $nomeArquivo.json: ".$lerArquivo."\n";
echo "-----------------------------\n";