<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Lista de Livros</title>
    <link rel="stylesheet" href="style.css">
</head>

<body>
    <div class="container tabela-container">
        <h1>Livros Cadastrados</h1>
        <table>
            <tr>
                <th>Título</th>
                <th>Autor</th>
                <th>Editora</th>
                <th>Ano</th>
                <th>Páginas</th>
                <th>Ação</th>
            </tr>
            <?php
            include "banco.php";

            $consulta = $conexao->query("SELECT * FROM livros");

            while ($livro = $consulta->fetch_assoc()) {
                echo "<tr>";
                echo "<td>" . $livro["titulo"] . "</td>";
                echo "<td>" . $livro["autor"] . "</td>";
                echo "<td>" . $livro["editora"] . "</td>";
                echo "<td>" . $livro["ano_publicacao"] . "</td>";
                echo "<td>" . $livro["paginas"] . "</td>";
                echo "<td><a href='editar_livro.php?id=" . $livro['id'] . "'>Editar</a></td>";
                echo "</tr>";
            }

            $conexao->close();
            ?>
        </table>
        <br>
        <a href="formulario.php">+ Cadastrar novo livro</a>
    </div>
</body>

</html>