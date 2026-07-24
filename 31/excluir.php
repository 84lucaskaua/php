<?php
include "banco.php";

$id = $_GET['id'];

$sql = "DELETE FROM livros WHERE id = $id";
$conexao->query($sql);

$conexao->close();

header("Location: listar_livros.php");
exit;
?>