## PHP: manipulando coleções com array

### 2 - Ordenando arrays

|Função|Significado|Implementação|
|------|-----------|-------------|
|sort| retorna o array em ordem crescente, alterando o seu índice| sort($array)|
|rsort|retorna o array em ordem decrescente, alterando o sue índice|rsort($array)|
|asort|retorna o array em ordem crescente, sem mudar seu índice|asort($array)|  
|arsort|retorna o array em ordem decrescente, sem mudar seu índice|arsort($array)|
|ksort|retorna o array em ordem crescente, baseando-se em sua chave|ksort($array)|
|krsort|retorna o array em ordem decrescente, baseando-se em sua chave|krsort($array)|
|usort|retorna o array com uma regra específica, alterando o seu índice| usort($array, 'nome da função')|

### 3 - Verificações

|Função|Significado|Implmentação|
|------|-----------|------------|
|gettype|Informa o tipo da variável|gettype($variavel)|
|is_array|Informa se a variável é um array|is_array($array)|
|array_is_list|Verifica se uma variável é uma lista|array_is_list($variavel)|
|array_in|verifica se um valor está contido naquele array|array_in($valor, $array, true), terceiro opcional|
|isset|verifica se tem um valor que seja não nulo no array|isset($array['chave'])|
|array_search|retorna a chave de acordo com o valor pesquisado|array_search($valor, $array, true), terceiro opcional|

### 4 - Manipulando arrays

|Função|Significado|Implementação|
|------|-----------|-------------|
|array_dif|vai retornar os elementos modificados entre os arrays informados|array_dif($array1, $array2)|
|array_dif_key|vai retornar a chave modificada entre os arrays informados|array_dif_key($array1, $array2)|
|array_dif_assoc|vai retornar os elementos + chaves modificados entre os arrays informados|array_dif_assoc($array1, $array2)|
|array_keys|retorna apenas as chave do array informado|array_keys($array)|
|array_values|retorna apenas os elementos do array informado|array_values($array)|
|array_combine|vai pegar um valor para chave e outro para elemento, formando um novo array|array_combine($valores1, $valores2), mesmo tamanho|
|array_flip|a chave vai ser elemento, e o elemento vai ser chamado, segundo o array informado|array_flip($valores1, $valores2)|
|array_merge|vai pegar os elementos do primeiro e segundo array, formando um novo array|array_merge($array1, $array2)|
Spread operator|vai pegar uma série de arrays/outros tipos e formar um array mãe|...$array1, 6, ...$array2, "Mateus"|

### 5 - Mais manipulações

|Função|Significado|Implementação|
|------|-----------|-------------|
|array_push|adiciona uma sequência de elementos no final do array|array_push($array, $valor1, $valor2, $valor3)|
|array_unshift|adiciona uma sequência de elementos no inicio do array|array_unshift($array, $valor1, $valor2, $valor3)|
|array_shift|remove o primeiro elemento de um array|array_shift($array)|
|array_pop|remove o último elemento de um array|array_pop($array)|
|list|separa os valores do array, atribuindo em variáveis (tupla) |list($variavel1, $variavel2) = $array|
|extract|retorna os valores de cada elemento fora de um array|extract($array), variável igual o nome da chave|
|compact|retorna os valores de cada elemento dentro de um array|compact($array)|

Atenciosamente, Mateus Maciel (@mateusmaciel460).