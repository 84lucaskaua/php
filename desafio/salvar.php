<?php
include "banco.php";

$nome = $_POST['nome'];
$data = $_POST['data'];
$horario = $_POST['horario'];
$local = $_POST['local'];
$cidade = $_POST['cidade'];
$vagas = $_POST['vagas'];

$sql = "INSERT INTO eventos (nome, data, horario, local, cidade, vagas) VALUES ('$nome', '$data', '$horario', '$local', '$cidade', $vagas)";

$conexao->query($sql);
$conexao->close();

header("Location: listar_eventos.php");
exit;
?>