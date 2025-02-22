<?php 

namespace WebBank\Modelos;

class Banco 
{
    private array $listaClientes;
    private array $listaContas;

    public function __construct(
        public readonly string $nome,
        public readonly string $endereco
    )
    {
        $this->listaClientes = [];
        $this->listaContas = [];
    }

    public function adicionarCliente(Cliente $cliente): void 
    {
        array_push($this->listaClientes, [
            'nomeCliente' => $cliente->nome,
            'cpfCliente' => $cliente->cpf,
            'enderecoCliente' => $cliente->endereco  
        ]);
    }

    public function removerCliente(Cliente $cliente): void 
    {
        $buscarId = 0;

        foreach ($this->listaContas as $posicao => $cpf) {
            $acessarCpfCliente = $this->listaContas[$posicao]['cpfCliente'];

            if ($acessarCpfCliente == $cliente->cpf) {
                $buscarId = $posicao;
            }
        }

        if ($cliente->cpf != $this->listaContas[$buscarId]['cpfCliente']) {
            array_splice($this->listaClientes, $buscarId, 1);
        } else {
            echo $cliente->nome . ' tem conta ativa, apague-a primeiramente.' . PHP_EOL;
        }
    }

    public function adicionarConta(Conta $conta): void 
    {
        array_push($this->listaContas, [
            'numeroConta' => $conta->numero,
            'nomeCliente' => $conta->titular->nome,
            'cpfCliente' => $conta->titular->cpf,
            'enderecoCliente' => $conta->titular->endereco
        ]);
    }

    public function removerConta(Conta $conta): void 
    {
        $id = 0;

        foreach ($this->listaContas as $posicao => $numeroConta) {
            $acessarNumeroConta = $this->listaContas[$posicao];

            if ($acessarNumeroConta == $conta->numero) {
                $id = $acessarNumeroConta;
            }
        }

        array_splice($this->listaContas, $id, 1);
    }
}