<?php
session_start();
include('../CONECTOR/conexao.php');

if(empty($_POST['email']) || empty($_POST['senha']) ){
    header('Location: index.php');
    exit();
}

$email = mysqli_real_escape_string($conexao, $_POST['email']);
$senha = mysqli_real_escape_string($conexao, $_POST['senha']);

$query = "SELECT * FROM cadastro WHERE Email = '{$email}' AND Senha = '{$senha}';";

$result = mysqli_query($conexao, $query);

$row = mysqli_num_rows($result);

if($row == 1){
    $nome_bd = mysqli_fetch_assoc($result);
    $_SESSION['nome'] = $nome_bd['Nome'];

    $endereco_bd = mysqli_fetch_assoc($result);
    $_SESSION['endereco'] = $nome_bd['Endereço'];

    $_SESSION['email'] = $email;
    header('Location: ../LOJA/index.php');
    exit();
} else{
    $_SESSION['erro'] = true;
    header('Location: index.php');
    exit();
}