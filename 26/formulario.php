<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cadastro de Livros</title>
    <link rel="stylesheet" href="style.css">
</head>

<body>
    <div class="container">
        <h1>Cadastro de Livros</h1>
        <form action="salvar_livro.php" method="post">
            <div class="campo">
                <label for="titulo">Título do Livro</label>
                <input type="text" id="titulo" name="titulo" required>
            </div>
            <div class="campo">
                <label for="autor">Autor</label>
                <input type="text" id="autor" name="autor" required>
            </div>
            <div class="campo">
                <label for="editora">Editora</label>
                <input type="text" id="editora" name="editora" required>
            </div>
            <div class="campo">
                <label for="ano_publicacao">Ano de Publicação</label>
                <input type="number" id="ano_publicacao" name="ano_publicacao" required>
            </div>
            <div class="campo">
                <label for="paginas">Quantidade de Páginas</label>
                <input type="number" id="paginas" name="paginas" required>
            </div>

            <button type="submit" class="btn">Cadastrar</button>
        </form>
    </div>
</body>

</html>