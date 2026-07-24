<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Lista de Eventos</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-sRIl4kxILFvY47J16cr9ZwB07vP4J8+LH7qKQnuqkuIAvNWLzeN8tE5YBujZqJLB" crossorigin="anonymous">
    <link rel="stylesheet" href="style.css">
</head>

<body>
    <div class="container tabela-container">
        <h1>Eventos Cadastrados</h1>

        <form action="listar_eventos.php" method="get" class="mb-4 d-flex">
            <input type="text" name="busca" class="form-control me-2" placeholder="Pesquisar evento pelo nome..."
                value="<?php echo isset($_GET['busca']) ? htmlspecialchars($_GET['busca']) : ''; ?>">
            <button type="submit" class="btn btn-secondary">Buscar</button>
        </form>

        <table class="table table-bordered">
            <tr>
                <th>Nome do Evento</th>
                <th>Data</th>
                <th>Horário</th>
                <th>Local</th>
                <th>Cidade</th>
                <th>Vagas</th>
                <th>Ações</th>
            </tr>
            <?php
            include "banco.php";

            if (isset($_GET['busca']) && $_GET['busca'] != "") {
                $busca = $conexao->real_escape_string($_GET['busca']);
                $sql = "SELECT * FROM eventos WHERE nome LIKE '%$busca%'";
            } else {
                $sql = "SELECT * FROM eventos";
            }

            $consulta = $conexao->query($sql);

            while ($evento = $consulta->fetch_assoc()) {
                echo "<tr>";
                echo "<td>" . $evento["nome"] . "</td>";
                echo "<td>" . date("d/m/Y", strtotime($evento["data"])) . "</td>";
                echo "<td>" . substr($evento["horario"], 0, 5) . "</td>";
                echo "<td>" . $evento["local"] . "</td>";
                echo "<td>" . $evento["cidade"] . "</td>";
                echo "<td>" . $evento["vagas"] . "</td>";
                echo "<td>
                        <a href='editar_evento.php?id=" . $evento['id'] . "' class='btn btn-sm btn-warning'>Editar</a>
                        <a href='excluir_evento.php?id=" . $evento['id'] . "' class='btn btn-sm btn-danger' onclick=\"return confirm('Tem certeza que deseja excluir este evento?');\">Excluir</a>
                      </td>";
                echo "</tr>";
            }

            $conexao->close();
            ?>
        </table>
        <a href="formulario.php" class="btn btn-primary">+ Cadastrar novo evento</a>
    </div>
</body>

</html>