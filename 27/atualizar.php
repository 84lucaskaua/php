<?php
include "banco.php";

$id = $_POST['id'];
$nome = $_POST['nome'];
$cargo = $_POST['cargo'];
$departamento = $_POST['departamento'];
$salario = $_POST['salario'];
$data_admissao = $_POST['data_admissao'];

$sql = "UPDATE funcionarios SET 
            nome = '$nome', 
            cargo = '$cargo', 
            departamento = '$departamento', 
            salario = $salario, 
            data_admissao = '$data_admissao' 
        WHERE id = $id";

$conexao->query($sql);
$conexao->close();

header("Location: listar_funcionarios.php");
exit;
?>