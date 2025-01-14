<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Página de Sucesso</title>
    <link rel="stylesheet" href="../styles/style.css">
</head>
<body>
    <!-- CONTEÚDO -->
    <main class="conteudo">
        <ul class="conteudo__menu-lista">
            <li class="conteudo__menu-item">
                Filme: <span class="conteudo__menu-span"><?php echo $_GET['filme']; ?></span>
            </li>
            <li class="conteudo__menu-item">
                Ano lançamento: <span class="conteudo__menu-span"><?php echo $_GET['ano']; ?></span>
            </li>
            <li class="conteudo__menu-item">
                Nota: <span class="conteudo__menu-span"><?php echo $_GET['nota']; ?></span>
            </li>
            <li class="conteudo__menu-item">
                Gênero: <span class="conteudo__menu-span"><?php echo $_GET['genero']; ?></span>
            </li>
        </ul>
    </main>
    <!-- CONTEÚDO -->
</body>
</html>