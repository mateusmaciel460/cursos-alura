# PHP OO - Herança, Polimorfismo, Encapsulamento e Interfaces

## Classes

|#|Classe|Interface|Trait|Serviço|
|-|------|---------|-----|-------|
|01|Funcionario||FuncionarioTrait||
|02|Desenvolvedor||FuncionarioTrait|BonificacaoFuncionario|
|03|Gerente|Autenticavel|FuncionarioTrait|BonificacaoFuncionario|
|04|Conta Bancaria|Operavel|ContaBancariaTrait||
|05|Conta Poupança||ContaBancariaTrait||
|06|Conta Corrente||ContaBancariaTrait|||

## Polimorfismo

### Calcular bonificação de colaboradores (muitas formas)

```bash
# Funcionario.php
abstract public function calcularBonificacao(): int;
```

```bash
# Funcionario.php > Desenvolvedor
public function calcularBonificacao(): int
{
    return 2000;
}
```
```bash
# Funcionario.php > Gerente
public function calcularBonificacao(): int
{
    return 4000;
}
```

## Encapsulamento

```bash
Servicos > BonificacaoFuncionario.php

class BonificacaoFuncionario 
{
    private int $totalBonificacao = 0;
}
```

#

Atenciosamente, Mateus Maciel (@mateusmaciel460).