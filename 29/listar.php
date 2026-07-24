<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Lista de Produtos</title>
    <link rel="stylesheet" href="style.css">
</head>

<body>
    <div class="container tabela-container">
        <h1>Produtos Cadastrados</h1>
        <table>
            <tr>
                <th>Nome do Produto</th>
                <th>Categoria</th>
                <th>Quantidade</th>
                <th>Preço</th>
                <th>Ação</th>
            </tr>
            <?php
            include "banco.php";

            $consulta = $conexao->query("SELECT * FROM produtos");

            while ($produto = $consulta->fetch_assoc()) {
                echo "<tr>";
                echo "<td>" . $produto["nome"] . "</td>";
                echo "<td>" . $produto["categoria"] . "</td>";
                echo "<td>" . $produto["quantidade"] . "</td>";
                echo "<td>R$ " . number_format($produto["preco"], 2, ',', '.') . "</td>";
                echo "<td><a href='excluir_produto.php?id=" . $produto['id'] . "' onclick=\"return confirm('Tem certeza que deseja excluir este produto?');\">Excluir</a></td>";
                echo "</tr>";
            }

            $conexao->close();
            ?>
        </table>
    </div>
</body>

</html>