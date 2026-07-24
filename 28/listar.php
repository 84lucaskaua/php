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
                <th>Ação</th>
            </tr>
            <?php
            include "banco.php";

            $consulta = $conexao->query("SELECT * FROM alunos");

            while ($aluno = $consulta->fetch_assoc()) {
                echo "<tr>";
                echo "<td>" . $aluno["nome"] . "</td>";
                echo "<td>" . $aluno["idade"] . "</td>";
                echo "<td>" . $aluno["curso"] . "</td>";
                echo "<td>" . $aluno["cidade"] . "</td>";
                echo "<td><a href='excluir_aluno.php?id=" . $aluno['id'] . "' onclick=\"return confirm('Tem certeza que deseja excluir este aluno?');\">Excluir</a></td>";
                echo "</tr>";
            }

            $conexao->close();
            ?>
        </table>
    </div>
</body>

</html>