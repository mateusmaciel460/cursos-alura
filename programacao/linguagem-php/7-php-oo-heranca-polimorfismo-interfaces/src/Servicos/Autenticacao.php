<?php 

namespace BancoOnline\Servicos;

use BancoOnline\Interfaces\Autenticavel;

class Autenticacao
{
    public function loginSistema(Autenticavel $autenticavel, string $senha) 
    {
        if ($autenticavel->podeAutenticar($senha)) {
            echo "Senha correta!" . PHP_EOL;
        } else {
            echo "Senha incorreta!" . PHP_EOL;
        }
    }   
}