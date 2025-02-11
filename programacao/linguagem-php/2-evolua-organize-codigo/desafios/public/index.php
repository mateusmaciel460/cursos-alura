<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Formulário - Screen Match</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <!-- CONTEÚDO -->
    <main class="conteudo">
        <div class="conteudo__secao">
            <h1 class="conteudo__titulo">Screen Match</h1>

            <form action="service/exportar-arquivo.php" method="post" class="conteudo__formulario">
                <div class="conteudo__grupo">
                    <div class="conteudo__camada">
                        <label for="nome" class="conteudo__rotulo">Filme</label>
                        <input type="text" id="nome" name="nome" placeholder="Nome do filme" class="conteudo__caixa-texto" value="De Volta Para o Futuro" required/>
                    </div>
                    <div class="conteudo__camada">
                        <label for="ano" class="conteudo__rotulo">Ano</label>
                        <input type="number" id="ano" name="ano" placeholder="Ano do ano" class="conteudo__caixa-texto" value="1985" required/>
                    </div>
                    <div class="conteudo__camada">
                        <label for="duracao" class="conteudo__rotulo">Duração</label>
                        <input type="number" id="duracao" name="duracao" placeholder="Duração do filme" class="conteudo__caixa-texto" value="106" required/>
                    </div>
                    <div class="conteudo__camada">
                        <label for="filme" class="conteudo__rotulo">Gênero</label>
                        <select id="genero" name="genero" class="conteudo__caixa-texto" required>
                            <option value="Ficção Científica">Ficção Científica</option>
                            <option value="Drama">Drama</option>
                            <option value="Aventura">Aventura</option>
                        </select>
                    </div>
                </div>

                <div class="conteudo__botoes">
                    <input type="submit" value="Enviar" class="conteudo__botao"/>
                </div>
            </form>
        </div>
    </main>
    <!-- CONTEÚDO -->
</body>
</html>