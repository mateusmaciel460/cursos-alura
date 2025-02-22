<?php

require './autoload.php';

use WebBank\Modelos\Banco;
use WebBank\Modelos\Cliente;
use WebBank\Modelos\Conta;

// Clientes
$cliente1 = new Cliente('Mateus', '000.000.000-00', 'Rua Avenida Brasil');
$cliente2 = new Cliente('Fernando', '111.111.111-11', 'Rua Avenida França');
$cliente3 = new Cliente('Paulo', '222.222.222-22', 'Rua Avenida Portugal');

// Contas
$conta1 = new Conta('123b', $cliente1);
$conta2 = new Conta('321b', $cliente2);
$conta3 = new Conta('456c', $cliente3);

// Banco
$banco = new Banco('WebBank', 'Rua do WebBank');

// Banco > Adicionar Cliente
$banco->adicionarCliente($cliente1);
$banco->adicionarCliente($cliente2);
$banco->adicionarCliente($cliente3);

// Banco > Adicionar Conta
$banco->adicionarConta($conta1);
$banco->adicionarConta($conta2);
$banco->adicionarConta($conta3);