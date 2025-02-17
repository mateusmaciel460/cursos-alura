# PHP OO - Herança, Polimorfismo, Encapsulamento e Interfaces

## Funcionários

|Classe|Tipo|Interface|
|------|----|---------|
|Funcionario|Pai|-x-|
|Desenvolvedor|Filho|-x-|
|Gerente|Filho|Autenticavel|

## Contas Bancárias

|Classe|Tipo|Interface|
|------|----|---------|
|Conta Bancaria|Pai|Operável|
|Conta Poupança|Filho|Operável pelo pai|
|Conta Corrente|Filho|Operável pelo pai|

## Pessoas

|Classe|Tipo|
|------|----|
|Pessoa|Pai|
|Funcionario|Filho|