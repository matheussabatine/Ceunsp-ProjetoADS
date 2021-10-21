<?php
session_start();
include_once('../CONECTOR/conexao.php');

$vetor = $_SESSION['cart'];

//var_dump($_SESSION['cart']);
print_r($vetor);

foreach ($vetor as $row => $value){
    $id = mysqli_real_escape_string($conexao, $value["p_id"]);
    $nome = mysqli_real_escape_string($conexao, $value["p_name"]);
    $preco = mysqli_real_escape_string($conexao, $value["p_price"]);
    $quantidade = mysqli_real_escape_string($conexao, $value["p_quantity"]);

    $sql = "INSERT INTO tb_itemvenda(pd_codigo, itm_qtde, itm_unitario, itm_total) VALUES('".$id."','".$quantidade."','".$preco."','".$preco * $quantidade."')";
    mysqli_query($conexao, $sql);
}
unset($_SESSION['cart']);
header('Location: index.php');
?>