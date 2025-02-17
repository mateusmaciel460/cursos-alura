<?php 

$dados = 'Mateus,23,solteiro,mateus@email.com';

// explode -> transforma uma string em array com um separador
$arrayDados = explode(',', $dados);
var_dump($arrayDados);

// implode -> transforma um array em string 
$texto = implode(',', $arrayDados);
echo $texto . PHP_EOL;

$textoParaAparar = '.,Mateus,Fernando,Silva,Nunes,.,';

// Aparar o texto acima, quanto do lado direito e esquerdo
$apararTextoCompletamente = trim($textoParaAparar, '.,p');
echo $apararTextoCompletamente . PHP_EOL;

// Aparar o texto, apenas do lado esquerdo
$apararTextoLadoEsquerdo = ltrim($textoParaAparar, ',.');
echo $apararTextoLadoEsquerdo . PHP_EOL;

// Aparar o texto, apenas do lado direito
$apararTextoLadoDireito = rtrim($textoParaAparar, ',.');
echo $apararTextoLadoDireito . PHP_EOL;