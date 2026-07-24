<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Resultado</title>
    <link rel="stylesheet" href="./css/style.css">
</head>

<body>

    <h1>Resultado da Multiplicação</h1>
    <?php
    $num1 = $_POST['numero1'];
    $num2 = $_POST['numero2'];
    $num3 = $_POST['numero3'];

    $multiplicacao = $num1 * $num2 * $num3;

    echo "O resultado da multiplicação é: $multiplicacao";
    ?>
</body>

</html>