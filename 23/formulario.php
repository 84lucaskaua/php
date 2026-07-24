<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cadastro de Clientes</title>
    <link rel="stylesheet" href="style.css">
</head>

<body>
    <div class="container">
        <h1>Cadastro de Clientes</h1>
        <form action="salvar_cliente.php" method="post">
            <div class="campo">
                <label for="nome">Nome Completo</label>
                <input type="text" id="nome" name="nome" required>
            </div>
            <div class="campo">
                <label for="idade">Idade</label>
                <input type="number" id="idade" name="idade" required>
            </div>
            <div class="campo">
                <label for="email">E-mail</label>
                <input type="email" id="email" name="email" required>
            </div>
            <div class="campo">
                <label for="telefone">Telefone</label>
                <input type="text" id="telefone" name="telefone" required>
            </div>
            <div class="campo">
                <label for="cidade">Cidade</label>
                <input type="text" id="cidade" name="cidade" required>
            </div>

            <button type="submit" class="btn">Cadastrar</button>
        </form>
    </div>
</body>

</html>