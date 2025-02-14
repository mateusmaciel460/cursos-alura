<?php 

$listaNotas = [
    'Mateus' => 5,
    'Lucas' => 8,
    'Fernando' => 3,
    'Paulo' => 9,
    'André' => null,
];

echo "--------------------------------------------\n";

// Verificando se a variável é um array com gettype
$verificacaoComGettype = gettype($listaNotas) == 'array' ?  'A variável listaNotas é um array' . PHP_EOL : 'A variável listaNotas não é um array' . PHP_EOL;
echo $verificacaoComGettype;

// Verificando se a variável é um array com is_array
$verificaoComIsArray = is_array($listaNotas) ? 'A variável listaNotas é um array' . PHP_EOL : 'A variável listaNotas não é um array';
echo $verificaoComIsArray;

// Verificando se a variável é uma lista
$verificandoExistenciaLista = array_is_list($listaNotas) ? 'A variável listaNotas é uma lista' . PHP_EOL : 'A variável listaNotas não é uma lista' . PHP_EOL;
echo $verificandoExistenciaLista;

$busca = 'André';

// Verificando se uma chave existe
$verificandoSeUmaChaveExiste = array_key_exists($busca, $listaNotas) ? "O aluno $busca foi encontrado" . PHP_EOL : "O aluno $busca não encontrado :(" . PHP_EOL;
echo $verificandoSeUmaChaveExiste;

// Verificando se um elemento existe
$verificarSeUmElementoExiste = array_search($busca, $listaNotas, true) ? "A nota $busca foi encontrada" . PHP_EOL : "A nota $busca não foi encontrada" . PHP_EOL;
echo $verificarSeUmElementoExiste;

// Verificando se um valor foi atribuido à uma chave
$verificarSeValorFoiAtribuido = isset($listaNotas[$busca]) ? "Um valor foi atribuido para $busca" . PHP_EOL : 'Um valor não foi atribuido, ele provavelmente é null' . PHP_EOL;
echo $verificarSeValorFoiAtribuido;

echo "--------------------------------------------\n";