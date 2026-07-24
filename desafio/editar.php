<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Editar Evento</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-sRIl4kxILFvY47J16cr9ZwB07vP4J8+LH7qKQnuqkuIAvNWLzeN8tE5YBujZqJLB" crossorigin="anonymous">
    <link rel="stylesheet" href="style.css">
</head>

<body>
    <div class="container form-container">
        <h1>Editar Evento</h1>
        <?php
        include "banco.php";

        $id = $_GET['id'];

        $consulta = $conexao->query("SELECT * FROM eventos WHERE id = $id");
        $evento = $consulta->fetch_assoc();
        ?>
        <form action="atualizar_evento.php" method="post">
            <input type="hidden" name="id" value="<?php echo $evento['id']; ?>">

            <div class="mb-3">
                <label for="nome" class="form-label">Nome do Evento</label>
                <input type="text" class="form-control" id="nome" name="nome" value="<?php echo $evento['nome']; ?>" required>
            </div>
            <div class="mb-3">
                <label for="data" class="form-label">Data</label>
                <input type="date" class="form-control" id="data" name="data" value="<?php echo $evento['data']; ?>" required>
            </div>
            <div class="mb-3">
                <label for="horario" class="form-label">Horário</label>
                <input type="time" class="form-control" id="horario" name="horario" value="<?php echo $evento['horario']; ?>" required>
            </div>
            <div class="mb-3">
                <label for="local" class="form-label">Local</label>
                <input type="text" class="form-control" id="local" name="local" value="<?php echo $evento['local']; ?>" required>
            </div>
            <div class="mb-3">
                <label for="cidade" class="form-label">Cidade</label>
                <input type="text" class="form-control" id="cidade" name="cidade" value="<?php echo $evento['cidade']; ?>" required>
            </div>
            <div class="mb-3">
                <label for="vagas" class="form-label">Quantidade de Vagas</label>
                <input type="number" class="form-control" id="vagas" name="vagas" value="<?php echo $evento['vagas']; ?>" required>
            </div>

            <button type="submit" class="btn btn-primary w-100">Atualizar</button>
        </form>
        <?php $conexao->close(); ?>
    </div>
</body>

</html>