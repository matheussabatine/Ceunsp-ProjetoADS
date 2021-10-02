<?php
session_start();
include('../CONECTOR/conexao.php');

if(empty($_POST['email']) || empty($_POST['senha']) ){
    header('Location: index.php');
    exit();
}

$email = mysqli_real_escape_string($conexao, $_POST['email']);
$senha = mysqli_real_escape_string($conexao, $_POST['senha']);//

$query = "SELECT * FROM cadastro WHERE Email = '{$email}' AND Senha = '{$senha}';";
//echo $query;exit;
$result = mysqli_query($conexao, $query);
//echo $result;exit;
$row = mysqli_num_rows($result);

//echo $row;exit;

if($row == 1){
    $_SESSION['email'] = $email;
    header('Location: ../LOJA/index.php');
    exit();
} else{
    $_SESSION['erro'] = true;
    header('Location: index.php');
    exit();
}