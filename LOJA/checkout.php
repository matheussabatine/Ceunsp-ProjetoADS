<?php
session_start();
include_once('../CONECTOR/conexao.php');

$vetor = $_SESSION['cart'];

//var_dump($_SESSION['cart']);
//print_r($vetor);
$email = $_SESSION['email'];
    
    $sql = "INSERT INTO tb_venda(Email, vd_data) VALUES('".$email."',now())";
    mysqli_query($conexao, $sql);

foreach ($vetor as $row => $value){
    $id = mysqli_real_escape_string($conexao, $value["p_id"]);
    $nome = mysqli_real_escape_string($conexao, $value["p_name"]);
    $preco = mysqli_real_escape_string($conexao, $value["p_price"]);
    $quantidade = mysqli_real_escape_string($conexao, $value["p_quantity"]);
    $desconto = 0;

    $sql = "INSERT INTO tb_itemvenda(pd_codigo, itm_qtde, itm_unitario, itm_desconto) VALUES('".$id."','".$quantidade."','".$preco."','".$desconto."')";
    mysqli_query($conexao, $sql);
}
unset($_SESSION['cart']);
header('Location: index.php');
?>