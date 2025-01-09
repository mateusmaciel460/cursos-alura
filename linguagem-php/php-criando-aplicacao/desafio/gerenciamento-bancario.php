<?php 

$nomeTitular = "Mateus Maciel";
$saldoAtual = (float) 1200;

function telaInicial($nome, $saldo) {
    system("clear");
    echo "-----------------------------------\n";
    echo "Titular: $nome \n";
    echo "Saldo atual: R$ $saldo\n";
    echo "-----------------------------------";

    echo "\n1. Consultar saldo atual\n";
    echo "2. Sacar valor\n";
    echo "3. Depositar valor\n";
    echo "4. Sair\n";

    echo "-----------------------------------\n";

    echo "Escolha sua opção: ";
    $opcao = trim(fgets(STDIN));

    return $opcao;
}

$opcaoEscolhida = telaInicial($nomeTitular, $saldoAtual);

do {
    switch ($opcaoEscolhida) {
        case 1:
            echo "\nOlá, $nomeTitular. Você tem R$ $saldoAtual na conta!\n";

            echo "\nDigite qualquer tecla + ENTER: ";
            fgets(STDIN);

            $opcaoEscolhida = telaInicial($nomeTitular, $saldoAtual);
            break;
        case 2:
            echo "\nDigite o valor que deseja sacar: ";
            $sacarValor = fgets(STDIN);
    
            if ($sacarValor > $saldoAtual) {
                echo "\nVocê não tem R$ $sacarValor\n";

                echo "Digite o valor que deseja sacar: ";
                $sacarValor = fgets(STDIN);
            } 

            $saldoAtual -= $sacarValor;
            $opcaoEscolhida = telaInicial($nomeTitular, $saldoAtual);
            break;
        case 3:
            echo "\nDigite o valor que deseja depositar: ";
            $depositarValor = fgets(STDIN);
    
            if ($depositarValor <= 0) {
                echo "\nO depósito precisa ser maior que 0\n";
            } else {
                $saldoAtual += $depositarValor;
            }
            
            $opcaoEscolhida = telaInicial($nomeTitular, $saldoAtual);
            break;
        case 4:
            echo "\n$nomeTitular, você decidiu sair do sistema :(\n";
            exit(0);
            break;
        default: 
            echo "Instrução desconhecida!";
            break;
    }
} while ($opcaoEscolhida !== 4);