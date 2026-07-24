<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Lista de Alunos</title>
    <link rel="stylesheet" href="style.css">
</head>

<body>
    <div class="container tabela-container">
        <h1>Alunos Cadastrados</h1>
        <table>
            <tr>
                <th>Nome</th>
                <th>Idade</th>
                <th>Curso</th>
                <th>Cidade</th>
            </tr>
            <?php
            include "banco.php";

            $consulta = $conexao->query("SELECT * FROM alunos");

            while ($linha = $consulta->fetch_assoc()) {
                echo "<tr>";
                echo "<td>" . $linha["nome"] . "</td>";
                echo "<td>" . $linha["idade"] . "</td>";
                echo "<td>" . $linha["curso"] . "</td>";
                echo "<td>" . $linha["cidade"] . "</td>";
                echo "</tr>";
            }

            $conexao->close();
            ?>
        </table>
    </div>
</body>

</html>