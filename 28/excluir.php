<?php
include "banco.php";

$id = $_GET['id'];

$sql = "DELETE FROM alunos WHERE id = $id";
$conexao->query($sql);

$conexao->close();

header("Location: listar_alunos.php");
exit;
?>