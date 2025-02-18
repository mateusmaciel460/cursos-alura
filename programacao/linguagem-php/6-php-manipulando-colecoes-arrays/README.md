## PHP: manipulando coleções com array

### 2 - Ordenando arrays

|#|Função|Aplicação|Explicação|
|-|------|---------|----------|
|01|**sort**|sort($array)|sortear em ordem crescente (elementos), alterando a posição original da chave.|
|02|**rsort**|rsort($array)|sortear em ordem decrescente (elementos), alterando a posição original da chave.|
|03|**asort**|asort($array)|sortear em ordem crescente (elementos), sem alterar a posição original da chave.|
|04|**arsort**|arsort($array)|sortear em ordem decrescente (elementos), sem alterar a posição original da chave.|
|05|**ksort**|ksort($array)|sortear em ordem crescente (chaves).|
|06|**krsort**|krsort($array)|sortear em ordem decrescente (chaves).|
|07|**usort**|usort($array)|sortear em uma ordem estabelecida pelo usuário.|

### 3 - Verificações

|#|Função|Aplicação|Explicação|
|-|------|---------|----------|
|01|**gettype**|gettype($variavel)|retorna o tipo primitivo de uma variável|
|02|**is_array**|is_array($array)|verifica se a variável é um array|
|03|**array_is_list**|array_is_list($array)|verifica se a variável é uma lista|
|04|**in_array**|in_array($elemento, $array)|verifica a existência de um elemento x no array|
|05|**isset**|isset($array[$chave])|verifica a existência de um elemento na chave x|
|06|**array_search**|array_search($elemento, $array)|retorna a chave do elemento informado|

### 4 - Manipulando arrays

|#|Função|Aplicação|Explicação|
|-|------|---------|----------|
|01|**array_diff**|array_diff($array1, $array2)|retorna o elemento modificado no $array2|
|02|**array_diff_key**|array_diff_key($array1, $array2)|retorna a chave modificada no $array2|
|03|**array_diff_assoc**|array_diff_assoc($array1, $array2)|retorna a chave e elemento modificado no $array2|
|04|**array_keys**|array_keys($array, $elemento)|retorna a chave do elemento informado|
|05|**array_values**|array_values($array)|retorna todos os elementos de um array|
|06|**array_combine**|array_combine($array1, $array2)|forma um novo array usando os elementos do $array1 e $array2|
|07|**array_flip**|array_flip($array)|inverte a chave pelo elemento, e o elemento pela chave|
|08|**array_merge**|array_merge($array1, $array2)|mescla os dois arrays em um array único|

### 5 - Mais manipulações

|#|Função|Aplicação|Explicação|
|-|------|---------|----------|
|01|**array_push**|array_push($array, $valor)|inserir um elemento na última posição do array|
|02|**array_unshift**|array_unshift($array, $valor)|inserir um elemento na primeira posição do array|
|03|**array_shift**|array_shift($array)|remove o primeiro elemento de um array|
|04|**array_pop**|array_pop($array)|remove o último elemento de um array|
|05|**extract**|extract($array)|retorna o elemento da chave|
|06|**compact**|compact('chave')|retorna o elemento da chave, usando list()|

#

Atenciosamente, Mateus Maciel (@mateusmaciel460).