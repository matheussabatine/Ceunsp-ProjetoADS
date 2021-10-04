<?php
session_start();
include('../CONECTOR/conexao.php');

$nome = mysqli_real_escape_string($conexao, trim($_POST['nome']));
$sexo = mysqli_real_escape_string($conexao, trim($_POST['sexo']));
$estados = mysqli_real_escape_string($conexao, trim($_POST['estados']));
$cidade = mysqli_real_escape_string($conexao, trim($_POST['cidade']));
$endereco = mysqli_real_escape_string($conexao, trim($_POST['endereco']));
$email = mysqli_real_escape_string($conexao, trim($_POST['email']));
$celular = mysqli_real_escape_string($conexao, trim($_POST['celular']));
$senha = mysqli_real_escape_string($conexao, trim($_POST['senha']));

$sql = "select count(*) as total from cadastro where Email = '$email'";
$result = mysqli_query($conexao, $sql);
$row = mysqli_fetch_assoc($result);

if($row['total'] == 1) {
    $_SESSION['email_existe'] = true;
    header('Location: index.php');
    exit;
}

$sql = "INSERT INTO cadastro (Nome, Sexo, Estado, Cidade, Endereço, Celular, Email, Senha) VALUES ('$nome','$sexo','$estados','$cidade','$endereco','$celular','$email','$senha')";

if($conexao->query($sql) === TRUE){
    $_SESSION['status_cadastro'] = true;
}

$conexao->close();

header('Location: index.php');
exit;

?>