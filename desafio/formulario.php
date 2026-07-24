<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cadastro de Eventos</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-sRIl4kxILFvY47J16cr9ZwB07vP4J8+LH7qKQnuqkuIAvNWLzeN8tE5YBujZqJLB" crossorigin="anonymous">
    <link rel="stylesheet" href="style.css">
</head>

<body>
    <div class="container form-container">
        <h1>Cadastro de Eventos</h1>
        <form action="salvar_evento.php" method="post">
            <div class="mb-3">
                <label for="nome" class="form-label">Nome do Evento</label>
                <input type="text" class="form-control" id="nome" name="nome" required>
            </div>
            <div class="mb-3">
                <label for="data" class="form-label">Data</label>
                <input type="date" class="form-control" id="data" name="data" required>
            </div>
            <div class="mb-3">
                <label for="horario" class="form-label">Horário</label>
                <input type="time" class="form-control" id="horario" name="horario" required>
            </div>
            <div class="mb-3">
                <label for="local" class="form-label">Local</label>
                <input type="text" class="form-control" id="local" name="local" required>
            </div>
            <div class="mb-3">
                <label for="cidade" class="form-label">Cidade</label>
                <input type="text" class="form-control" id="cidade" name="cidade" required>
            </div>
            <div class="mb-3">
                <label for="vagas" class="form-label">Quantidade de Vagas</label>
                <input type="number" class="form-control" id="vagas" name="vagas" required>
            </div>

            <button type="submit" class="btn btn-primary w-100">Cadastrar</button>
        </form>
        <div class="text-center mt-3">
            <a href="listar_eventos.php">Ver lista de eventos</a>
        </div>
    </div>
</body>

</html>