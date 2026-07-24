<?php
include "banco.php";

$nome = $_POST['nome'];
$idade = $_POST['idade'];
$email = $_POST['email'];
$telefone = $_POST['telefone'];
$cidade = $_POST['cidade'];

$sql = "INSERT INTO clientes (nome, idade, email, telefone, cidade) VALUES ('$nome', $idade, '$email', '$telefone', '$cidade')";

if ($conexao->query($sql)) {
    echo "Cliente cadastrado com sucesso!";
} else {
    echo "Erro ao cadastrar cliente: " . $conexao->error;
}

$conexao->close();
?>
<br><br>
<a href="formulario.php">Cadastrar outro cliente</a> |
<a href="listar_clientes.php">Ver lista de clientes</a>