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
                <th>Ano de Publicação</th>
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
                echo "<td><a href='excluir_livro.php?id=" . $livro['id'] . "' onclick=\"return confirm('Tem certeza que deseja excluir este livro?');\">Excluir</a></td>";
                echo "</tr>";
            }

            $conexao->close();
            ?>
        </table>
    </div>
</body>

</html>