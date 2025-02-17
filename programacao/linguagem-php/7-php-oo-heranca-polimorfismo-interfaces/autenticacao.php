<?php

require 'autoload.php';

use BancoOnline\Modelos\Colaborador\Gerente;
use BancoOnline\Servicos\Autenticacao;

$gerente = new Gerente('Fernando', '888.888.888-88');

$autenticacao = new Autenticacao();
$autenticacao->loginSistema($gerente, '123');