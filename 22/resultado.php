<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Resultado</title>
    <link rel="stylesheet" href="style.css">
</head>

<body>
    <?php
    include "conexao.php";

    $num1 = $_POST['numero1'];
    $num2 = $_POST['numero2'];
    $num3 = $_POST['numero3'];
    $num4 = $_POST['numero4'];
    $resultado = $num1 - $num2 - $num3 - $num4;

    // Gravar no banco
    $sql = "INSERT INTO subtracoes_form (numero1, numero2, numero3, numero4, resultado) VALUES ($num1, $num2, $num3, $num4, $resultado)";
    $conexao->query($sql);
    ?>

    <div class="resultado">
        <h1>Resultado da Subtração</h1>
        <p>Número 1: <?php echo $num1; ?></p>
        <p>Número 2: <?php echo $num2; ?></p>
        <p>Número 3: <?php echo $num3; ?></p>
        <p>Número 4: <?php echo $num4; ?></p>
        <p>Resultado: <?php echo $resultado; ?></p>
    </div>

    <div class="registros">
        <h2>Registros no banco de dados</h2>
        <table border="1" cellpadding="8">
            <tr>
                <th>ID</th>
                <th>Número 1</th>
                <th>Número 2</th>
                <th>Número 3</th>
                <th>Número 4</th>
                <th>Resultado</th>
            </tr>
            <?php
            $consulta = $conexao->query("SELECT * FROM subtracoes_form");
            while ($linha = $consulta->fetch_assoc()) {
                echo "<tr>";
                echo "<td>" . $linha["id"] . "</td>";
                echo "<td>" . $linha["numero1"] . "</td>";
                echo "<td>" . $linha["numero2"] . "</td>";
                echo "<td>" . $linha["numero3"] . "</td>";
                echo "<td>" . $linha["numero4"] . "</td>";
                echo "<td>" . $linha["resultado"] . "</td>";
                echo "</tr>";
            }
            $conexao->close();
            ?>
        </table>
    </div>
</body>

</html>