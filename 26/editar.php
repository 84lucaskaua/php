<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Editar Livro</title>
    <link rel="stylesheet" href="style.css">
</head>

<body>
    <div class="container">
        <h1>Editar Livro</h1>
        <?php
        include "banco.php";

        $id = $_GET['id'];

        $consulta = $conexao->query("SELECT * FROM livros WHERE id = $id");
        $livro = $consulta->fetch_assoc();
        ?>
        <form action="atualizar_livro.php" method="post">
            <input type="hidden" name="id" value="<?php echo $livro['id']; ?>">

            <div class="campo">
                <label for="titulo">Título do Livro</label>
                <input type="text" id="titulo" name="titulo" value="<?php echo $livro['titulo']; ?>" required>
            </div>
            <div class="campo">
                <label for="autor">Autor</label>
                <input type="text" id="autor" name="autor" value="<?php echo $livro['autor']; ?>" required>
            </div>
            <div class="campo">
                <label for="editora">Editora</label>
                <input type="text" id="editora" name="editora" value="<?php echo $livro['editora']; ?>" required>
            </div>
            <div class="campo">
                <label for="ano_publicacao">Ano de Publicação</label>
                <input type="number" id="ano_publicacao" name="ano_publicacao" value="<?php echo $livro['ano_publicacao']; ?>" required>
            </div>
            <div class="campo">
                <label for="paginas">Quantidade de Páginas</label>
                <input type="number" id="paginas" name="paginas" value="<?php echo $livro['paginas']; ?>" required>
            </div>

            <button type="submit" class="btn">Atualizar</button>
        </form>
        <?php $conexao->close(); ?>
    </div>
</body>

</html>