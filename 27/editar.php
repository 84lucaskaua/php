<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Editar Funcionário</title>
    <link rel="stylesheet" href="style.css">
</head>

<body>
    <div class="container">
        <h1>Editar Funcionário</h1>
        <?php
        include "banco.php";

        $id = $_GET['id'];

        $consulta = $conexao->query("SELECT * FROM funcionarios WHERE id = $id");
        $funcionario = $consulta->fetch_assoc();
        ?>
        <form action="atualizar_funcionario.php" method="post">
            <input type="hidden" name="id" value="<?php echo $funcionario['id']; ?>">

            <div class="campo">
                <label for="nome">Nome Completo</label>
                <input type="text" id="nome" name="nome" value="<?php echo $funcionario['nome']; ?>" required>
            </div>
            <div class="campo">
                <label for="cargo">Cargo</label>
                <input type="text" id="cargo" name="cargo" value="<?php echo $funcionario['cargo']; ?>" required>
            </div>
            <div class="campo">
                <label for="departamento">Departamento</label>
                <input type="text" id="departamento" name="departamento" value="<?php echo $funcionario['departamento']; ?>" required>
            </div>
            <div class="campo">
                <label for="salario">Salário</label>
                <input type="number" step="0.01" id="salario" name="salario" value="<?php echo $funcionario['salario']; ?>" required>
            </div>
            <div class="campo">
                <label for="data_admissao">Data de Admissão</label>
                <input type="date" id="data_admissao" name="data_admissao" value="<?php echo $funcionario['data_admissao']; ?>" required>
            </div>

            <button type="submit" class="btn">Atualizar</button>
        </form>
        <?php $conexao->close(); ?>
    </div>
</body>

</html>