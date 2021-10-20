<?php
session_start();
include_once('../CONECTOR/conexao.php');

$vetor = $_SESSION['cart'];

//var_dump($_SESSION['cart']);
print_r($vetor);

foreach ($vetor as $row => $value){
    $id = mysqli_real_escape_string($conexao, $value["p_id"]);
    $ordem = 5;
    $nome = mysqli_real_escape_string($conexao, $value["p_name"]);
    $preco = mysqli_real_escape_string($conexao, $value["p_price"]);
    $quantidade = mysqli_real_escape_string($conexao, $value["p_quantity"]);

    $sql = "INSERT INTO itemvenda(id_item_ordem, id_ordem, nome_produto, quantidade, preco_unitario, preco_total) VALUES('".$id."','".$ordem."','".$nome."','".$quantidade."','".$preco."','".$preco * $quantidade."')";
    mysqli_query($conexao, $sql);
}
unset($_SESSION['cart']);
header('Location: index.php');
?>