<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Screen Match - Mensagem de Sucesso</title>
    <link rel="stylesheet" href="../style.css">
</head>
<body>
    <!-- CONTEÚDO -->
    <main class="conteudo">
        <div class="conteudo__secao">
            <h1 class="conteudo__titulo">Screen Match - Resposta</h1>

            <ul class="conteudo__menu-lista">
                <li class="conteudo__menu-item">
                    Filme: 
                    <span class="conteudo__span">
                        <?php echo $_GET["nome"]; ?>
                    </span>
                </li>
                <li class="conteudo__menu-item">
                    Ano: 
                    <span class="conteudo__span">
                        <?php echo $_GET["ano"]; ?>
                    </span>
                </li>
                <li class="conteudo__menu-item">
                    Duração: 
                    <span class="conteudo__span">
                        <?php echo $_GET["duracao"]; ?> minutos
                    </span>
                </li>
                <li class="conteudo__menu-item">
                    Gênero: 
                    <span class="conteudo__span">
                        <?php echo $_GET["genero"]; ?>
                    </span>
                </li>
            </ul>
        </div>
    </main>
    <!-- CONTEÚDO -->
</body>
</html>