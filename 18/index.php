<?php
include "conexao.php";

// Três pares de números
$num1a = 7; $num1b = 9;
$num2a = 14; $num2b = 6;
$num3a = 23; $num3b = 4;

// Cálculos
$resultado1 = $num1a * $num1b;
$resultado2 = $num2a * $num2b;
$resultado3 = $num3a * $num3b;

// Inserir no banco
$sql1 = "INSERT INTO multiplicacoes (numero1, numero2, resultado) VALUES ($num1a, $num1b, $resultado1)";
$sql2 = "INSERT INTO multiplicacoes (numero1, numero2, resultado) VALUES ($num2a, $num2b, $resultado2)";
$sql3 = "INSERT INTO multiplicacoes (numero1, numero2, resultado) VALUES ($num3a, $num3b, $resultado3)";

if ($conexao->query($sql1)) {
    echo "Cálculo 1 gravado com sucesso!<br>";
} else {
    echo "Erro ao gravar cálculo 1: " . $conexao->error . "<br>";
}

if ($conexao->query($sql2)) {
    echo "Cálculo 2 gravado com sucesso!<br>";
} else {
    echo "Erro ao gravar cálculo 2: " . $conexao->error . "<br>";
}

if ($conexao->query($sql3)) {
    echo "Cálculo 3 gravado com sucesso!<br><br>";
} else {
    echo "Erro ao gravar cálculo 3: " . $conexao->error . "<br><br>";
}

// Consultar tabela
$consulta = $conexao->query("SELECT * FROM multiplicacoes");

echo "<h3>Registros no banco de dados:</h3>";
echo "<table border='1' cellpadding='8'>";
echo "<tr><th>ID</th><th>Número 1</th><th>Número 2</th><th>Resultado</th></tr>";

while ($linha = $consulta->fetch_assoc()) {
    echo "<tr>";
    echo "<td>" . $linha["id"] . "</td>";
    echo "<td>" . $linha["numero1"] . "</td>";
    echo "<td>" . $linha["numero2"] . "</td>";
    echo "<td>" . $linha["resultado"] . "</td>";
    echo "</tr>";
}

echo "</table>";

$conexao->close();
?>