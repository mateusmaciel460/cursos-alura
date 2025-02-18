## PHP Strings: manipulando textos com PHP

### 1 - Ordenando arrays

|#|Função|Aplicação|Explicação|
|-|------|---------|----------|
|01|str_contains|str_contains($variavel, $string)|verifica a existência de $string em $variavel|
|02|str_start_with|str_start_with($variavel, $string)|verifica se a $variavel começa com a $string|
|03|str_end_with|str_end_with($variavel, $string)|verifica se a $variavel termina com a $string|

### Pedaços de string

|#|Função|Aplicação|Explicação|
|-|------|---------|----------|
|01|**substr**|substr($variavel, $posicaoX, $posicaoY)|retorna as strings da posição x até y|
|02|**strpos**|strpos($variavel, 'letra da string')|retorna a posição daquela letra na string|  
|03|**mb_strtolower**|mb_strtolower($string)|retorna uma string com letras minúsculas|
|04|**mb_strtoupper**|mb_strtolower($string)|retorna uma string com letras maiúsculas|
|05|**mb_strlen**|mb_strlen($string) >= 8|retorna o números de caracteres de uma string|

### Dividindo e unindo

|#|Função|Aplicação|Explicação|
|-|------|---------|----------|
|01|**explode**|explode(',', $string)|transforma uma string em array|
|02|**implode**|implode(',', $array)|transforma um array em string|
|03|**trim**|trim($string, '.,')|remove os espaços/ponto/vírgula nas pontas da string|
|04|**ltrim**|trim($string, '.,')|remove os espaços/ponto/vírgula na ponta esquerda da string|
|05|**rtrim**|trim($string, '.,')|remove os espaços/ponto/vírgula na ponta direita da string|

# Detalhes de sintaxe

|#|Função|Aplicação|Explicação|
|-|------|---------|----------|
|01|**FINAL**|<<<FINAL mensagem FINAL|Heredoc, evitando o excesso de espaços (usando variáveis)|
|02|**'FINAL'**|<<<'FINAL' mensagem FINAL|Nowdoc, evitando excesso de espaços|
|03|**addslashes**|addslashes($string)|adiciona barras invertidas antes de algumas caracteres|
|04|**htmlentities**|htmlentities($string)|troca caracteres por entidades html|
|05|**str_replace**|str_replace($buscar, $alternativa, $string)| troca $buscar por $alternativa dentro de $string|
|06|**strtr**|strtr($string, $retirar, $colocar)|vai trocar uma letra por outra dentro de $string|

#

Atenciosamente, Mateus Maciel (@mateusmaciel460).