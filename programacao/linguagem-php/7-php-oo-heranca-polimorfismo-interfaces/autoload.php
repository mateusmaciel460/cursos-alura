<?php 

spl_autoload_register(function(string $nomeClasse) {
    $caminho = str_replace('WebBank', 'src', $nomeClasse).'.php';
    $caminho = str_replace('\\', DIRECTORY_SEPARATOR, $caminho);
    $caminhoCompleto = __DIR__ . DIRECTORY_SEPARATOR . $caminho;

    if (file_exists($caminhoCompleto)) {
        require_once $caminhoCompleto;
    }
});