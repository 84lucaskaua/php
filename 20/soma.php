<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Soma</title>
    <link rel="stylesheet" href="style.css">
</head>

<body>
    <form action="resultado.php" method="post">
        <div>
            <h1>Soma</h1>
        </div>
        <div class="mb-3">
            <label for="numero1">Digite o primeiro número</label>
            <input type="number" id="numero1" name="numero1">
        </div>
        <div class="mb-3">
            <label for="numero2">Digite o segundo número</label>
            <input type="number" id="numero2" name="numero2">
        </div>

        <button type="submit" class="btn">Somar</button>
    </form>
</body>

</html>