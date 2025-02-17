<?php

require 'autoload.php';

use BancoOnline\Modelos\Colaborador\{
    Gerente, Desenvolvedor
};
use BancoOnline\Servicos\BonificacaoFuncionario;

$gerente = new Gerente('Mateus', '000.000.000-00');
$desenvolvedor = new Desenvolvedor('Paulo', '111.111.111-11');

$bonificacao = new BonificacaoFuncionario();
$bonificacao->incluir($gerente);
$bonificacao->incluir($desenvolvedor);

$totalBonificacao = $bonificacao->retornarTotalBonificacao();

echo "O total de bonificação foi: R$ $totalBonificacao" . PHP_EOL;