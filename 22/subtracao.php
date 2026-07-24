<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Subtração</title>
    <link rel="stylesheet" href="style.css">
</head>

<body>
    <form action="resultado.php" method="post">
        <div>
            <h1>Subtração</h1>
        </div>
        <div class="mb-3">
            <label for="numero1">Digite o primeiro número</label>
            <input type="number" id="numero1" name="numero1">
        </div>
        <div class="mb-3">
            <label for="numero2">Digite o segundo número</label>
            <input type="number" id="numero2" name="numero2">
        </div>
        <div class="mb-3">
            <label for="numero3">Digite o terceiro número</label>
            <input type="number" id="numero3" name="numero3">
        </div>
        <div class="mb-3">
            <label for="numero4">Digite o quarto número</label>
            <input type="number" id="numero4" name="numero4">
        </div>

        <button type="submit" class="btn">Subtrair</button>
    </form>
</body>

</html>