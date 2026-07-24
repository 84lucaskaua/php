<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Resultado</title>
    <link rel="stylesheet" href="./css/style.css">
</head>

<body>

    <div class="resultado">
        <h1>Resultado da Divisão</h1>
        <?php
        $num1 = $_POST['numero1'];
        $num2 = $_POST['numero2'];

        if ($num2 == 0) {
            echo "Não é possível dividir por zero.";
        } else {
            $divisao = $num1 / $num2;
            echo "O resultado da divisão é: $divisao";
        }
        ?>
    </div>
</body>

</html>