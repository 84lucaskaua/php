<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Lista de Clientes</title>
    <link rel="stylesheet" href="style.css">
</head>

<body>
    <div class="container tabela-container">
        <h1>Clientes Cadastrados</h1>
        <table>
            <tr>
                <th>ID</th>
                <th>Nome</th>
                <th>Idade</th>
                <th>E-mail</th>
                <th>Telefone</th>
                <th>Cidade</th>
            </tr>
            <?php
            include "banco.php";

            $consulta = $conexao->query("SELECT * FROM clientes");

            while ($linha = $consulta->fetch_assoc()) {
                echo "<tr>";
                echo "<td>" . $linha["id"] . "</td>";
                echo "<td>" . $linha["nome"] . "</td>";
                echo "<td>" . $linha["idade"] . "</td>";
                echo "<td>" . $linha["email"] . "</td>";
                echo "<td>" . $linha["telefone"] . "</td>";
                echo "<td>" . $linha["cidade"] . "</td>";
                echo "</tr>";
            }

            $conexao->close();
            ?>
        </table>
    </div>
</body>

</html>