<?php
include "conexao.php";

// Três pares de números
$num1a = 50; $num1b = 18;
$num2a = 97; $num2b = 32;
$num3a = 63; $num3b = 45;

// Cálculos
$resultado1 = $num1a - $num1b;
$resultado2 = $num2a - $num2b;
$resultado3 = $num3a - $num3b;

// Inserir no banco
$sql1 = "INSERT INTO subtracoes (numero1, numero2, resultado) VALUES ($num1a, $num1b, $resultado1)";
$sql2 = "INSERT INTO subtracoes (numero1, numero2, resultado) VALUES ($num2a, $num2b, $resultado2)";
$sql3 = "INSERT INTO subtracoes (numero1, numero2, resultado) VALUES ($num3a, $num3b, $resultado3)";

if ($conexao->query($sql1) && $conexao->query($sql2) && $conexao->query($sql3)) {
    echo "Dados gravados com sucesso!<br><br>";
} else {
    echo "Erro ao gravar dados: " . $conexao->error . "<br><br>";
}

// Consultar tabela
$consulta = $conexao->query("SELECT * FROM subtracoes");

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