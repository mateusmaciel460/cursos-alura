<?php

$nomeTitular = (string) "Mateus Maciel";
$saldoTitular = (int) 1200;

function exibirMensagemInicialNaTela($nome, $saldo) {
    system('clear');

    echo "----------------------------\n";
    echo "Titular: $nome\n";
    echo "Saldo atual: $saldo\n";
    echo "----------------------------\n";

    echo "1. Consultar saldo atual\n";
    echo "2. Sacar valor\n";
    echo "3. Depositar valor\n";
    echo "4. Sair\n";

    echo "\nEscolha uma opção: ";
    $opcao = fgets(STDIN);

    return $opcao;
}

$opcaoEscolhida = exibirMensagemInicialNaTela($nomeTitular, $saldoTitular);

do {
    switch ($opcaoEscolhida) {
        case 1:
            echo "\nO seu saldo atual é R$ $saldoTitular";

            sleep(2);
            $opcaoEscolhida = exibirMensagemInicialNaTela($nomeTitular, $saldoTitular);
            break;
        case 2:
            echo "\nQuanto deseja sacar? ";
            $sacar = fgets(STDIN);

            if ($sacar < $saldoTitular) {
                $saldoTitular -= $sacar;
                echo "Você sacou R$ $sacar\n";
            } else {
                echo "Você não tem R$ $sacar\n";
            }

            sleep(2);
            $opcaoEscolhida = exibirMensagemInicialNaTela($nomeTitular, $saldoTitular);
            break;
        case 3:
            echo "\nQuanto deseja depositar? ";
            $depositar = fgets(STDIN);

            if ($depositar > 0) {
                $saldoTitular += $depositar;
                echo "Você depositou R$ $depositar\n";
            } else {
                echo "O deposito deve ser maior que 0.\n";
            }

            sleep(2);
            $opcaoEscolhida = exibirMensagemInicialNaTela($nomeTitular, $saldoTitular);
            break;
        case 4:
            break;
        default:
            echo "Opção desconhecida";
            break;
    }
} while ($opcaoEscolhida != 4);

echo "\nVocê decidiu sair do sistema :(\n";