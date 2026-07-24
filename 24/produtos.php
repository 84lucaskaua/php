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
                <th>Quantidade</th>
                <th>Preço</th>
            </tr>
            <?php
            include "banco.php";

            $consulta = $conexao->query("SELECT * FROM produtos");

            while ($linha = $consulta->fetch_assoc()) {
                echo "<tr>";
                echo "<td>" . $linha["nome"] . "</td>";
                echo "<td>" . $linha["quantidade"] . "</td>";
                echo "<td>R$ " . number_format($linha["preco"], 2, ',', '.') . "</td>";
                echo "</tr>";
            }

            $conexao->close();
            ?>
        </table>
    </div>
</body>

</html>