<?php
include "banco.php";

$id = $_POST['id'];
$titulo = $_POST['titulo'];
$autor = $_POST['autor'];
$editora = $_POST['editora'];
$ano_publicacao = $_POST['ano_publicacao'];
$paginas = $_POST['paginas'];

$sql = "UPDATE livros SET 
            titulo = '$titulo', 
            autor = '$autor', 
            editora = '$editora', 
            ano_publicacao = $ano_publicacao, 
            paginas = $paginas 
        WHERE id = $id";

if ($conexao->query($sql)) {
    echo "Livro atualizado com sucesso!";
} else {
    echo "Erro ao atualizar livro: " . $conexao->error;
}

$conexao->close();
?>
<br><br>
<a href="listar_livros.php">Voltar para a lista de livros</a>