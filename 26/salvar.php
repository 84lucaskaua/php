<?php
include "banco.php";

$titulo = $_POST['titulo'];
$autor = $_POST['autor'];
$editora = $_POST['editora'];
$ano_publicacao = $_POST['ano_publicacao'];
$paginas = $_POST['paginas'];

$sql = "INSERT INTO livros (titulo, autor, editora, ano_publicacao, paginas) VALUES ('$titulo', '$autor', '$editora', $ano_publicacao, $paginas)";

if ($conexao->query($sql)) {
    echo "Livro cadastrado com sucesso!";
} else {
    echo "Erro ao cadastrar livro: " . $conexao->error;
}

$conexao->close();
?>
<br><br>
<a href="formulario.php">Cadastrar outro livro</a> |
<a href="listar_livros.php">Ver lista de livros</a>