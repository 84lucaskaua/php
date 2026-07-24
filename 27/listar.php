<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Lista de Funcionários</title>
    <link rel="stylesheet" href="style.css">
</head>

<body>
    <div class="container tabela-container">
        <h1>Funcionários Cadastrados</h1>
        <table>
            <tr>
                <th>Nome</th>
                <th>Cargo</th>
                <th>Departamento</th>
                <th>Salário</th>
                <th>Data de Admissão</th>
                <th>Ação</th>
            </tr>
            <?php
            include "banco.php";

            $consulta = $conexao->query("SELECT * FROM funcionarios");

            while ($funcionario = $consulta->fetch_assoc()) {
                echo "<tr>";
                echo "<td>" . $funcionario["nome"] . "</td>";
                echo "<td>" . $funcionario["cargo"] . "</td>";
                echo "<td>" . $funcionario["departamento"] . "</td>";
                echo "<td>R$ " . number_format($funcionario["salario"], 2, ',', '.') . "</td>";
                echo "<td>" . $funcionario["data_admissao"] . "</td>";
                echo "<td><a href='editar_funcionario.php?id=" . $funcionario['id'] . "'>Editar</a></td>";
                echo "</tr>";
            }

            $conexao->close();
            ?>
        </table>
        <br>
        <a href="formulario.php">+ Cadastrar novo funcionário</a>
    </div>
</body>

</html>