<?php
include "banco.php";

$id = $_GET['id'];

$sql = "DELETE FROM funcionarios WHERE id = $id";
$conexao->query($sql);

$conexao->close();

header("Location: listar_funcionarios.php");
exit;
?>