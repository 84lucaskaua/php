<?php
include "banco.php";

$id = $_GET['id'];

$sql = "DELETE FROM eventos WHERE id = $id";
$conexao->query($sql);

$conexao->close();

header("Location: listar_eventos.php");
exit;
?>