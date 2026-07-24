<?php
include "banco.php";

$id = $_POST['id'];
$nome = $_POST['nome'];
$data = $_POST['data'];
$horario = $_POST['horario'];
$local = $_POST['local'];
$cidade = $_POST['cidade'];
$vagas = $_POST['vagas'];

$sql = "UPDATE eventos SET 
            nome = '$nome', 
            data = '$data', 
            horario = '$horario', 
            local = '$local', 
            cidade = '$cidade', 
            vagas = $vagas 
        WHERE id = $id";

$conexao->query($sql);
$conexao->close();

header("Location: listar_eventos.php");
exit;
?>