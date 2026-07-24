<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cadastro de Funcionários</title>
    <link rel="stylesheet" href="style.css">
</head>

<body>
    <div class="container">
        <h1>Cadastro de Funcionários</h1>
        <form action="salvar_funcionario.php" method="post">
            <div class="campo">
                <label for="nome">Nome Completo</label>
                <input type="text" id="nome" name="nome" required>
            </div>
            <div class="campo">
                <label for="cargo">Cargo</label>
                <input type="text" id="cargo" name="cargo" required>
            </div>
            <div class="campo">
                <label for="departamento">Departamento</label>
                <input type="text" id="departamento" name="departamento" required>
            </div>
            <div class="campo">
                <label for="salario">Salário</label>
                <input type="number" step="0.01" id="salario" name="salario" required>
            </div>
            <div class="campo">
                <label for="data_admissao">Data de Admissão</label>
                <input type="date" id="data_admissao" name="data_admissao" required>
            </div>

            <button type="submit" class="btn">Cadastrar</button>
        </form>
    </div>
</body>

</html>