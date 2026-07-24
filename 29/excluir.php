<?php
include "banco.php";

$id = $_GET['id'];

$sql = "DELETE FROM produtos WHERE id = $id";
$conexao->query($sql);

$conexao->close();

header("Location: listar_produtos.php");
exit;
?>