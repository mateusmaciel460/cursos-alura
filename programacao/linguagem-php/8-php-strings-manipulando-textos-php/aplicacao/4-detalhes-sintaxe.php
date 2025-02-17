<?php 

// 1 - String numéricas
$anoNascimento = '1997';
$anoAtual = 2025;
$idade = $anoAtual - $anoNascimento;

echo "-----------------------------" . PHP_EOL;
echo "Idade: $idade" . PHP_EOL;

// == (consegue comparar string e integer) === (não consegue comparar)
$verificarIdade = $anoNascimento === 1997 ? 'Sim' : 'Não';
echo $verificarIdade . PHP_EOL;
echo "-----------------------------" . PHP_EOL;

// 2 - Here doc e Now doc
function exibirMensagem(string $nome) {
    $conteudoHere = <<<FINAL
    Olá, $nome.

    Seja bem-vindo ao sistema.

    Atenciosamente, mateus.
    FINAL;

    $conteudoNow = <<<'FINAL'
    Olá, $nome.

    Seja bem-vindo ao sistema.

    Atenciosamente, mateus.
    FINAL;
    
    echo $conteudoHere . PHP_EOL;
    echo "------------------------" . PHP_EOL;
    echo $conteudoNow . PHP_EOL;
}

exibirMensagem('Fernando');

echo "-----------------------------" . PHP_EOL;

// 3 - addslashes, htmlentities
$nome = 'campo"/><script>alert("Olá, Mundo!")</script>';
?>

<input type="text" name="<?php echo addslashes($nome) ?>"/>
<input type="text" name="<?php echo htmlentities($nome) ?>"/>

<?php 

echo "-----------------------------" . PHP_EOL;

$mensagemUsuario = 'besta, chato, arrogante, mas legal';

// Censunar por palavras (str_replace)
$censurarMensagem = str_replace(
    ['besta', 'chato', 'arrogante'], 
    '***', 
    $mensagemUsuario);
echo $censurarMensagem . PHP_EOL;

// Censurar por caracteres -> best*, ch*to, *rrog*nte, m*s leg*l
$censurarMensagem = strtr($mensagemUsuario, 'a', '*');
echo $censurarMensagem . PHP_EOL;

$mensagemComunicacao = 'Olá, Mundo';

// Trocar uma por outra com strtr
echo "-----------------------------" . PHP_EOL;
$portuguesParaIngles = strtr($mensagemComunicacao, ["Olá" => "Hello", "Mundo" => "World"]);
$inglesParaPortugues = strtr($mensagemComunicacao, ["Hello" => "Olá", "World" => "Mundo"]);

echo "Olá, Mundo ----> " . $portuguesParaIngles . PHP_EOL;
echo "Hello, World ----> " . $inglesParaPortugues . PHP_EOL;