<?php
session_start();
include_once('../CONECTOR/conexao.php');

$vetor = $_SESSION['cart'];

//var_dump($_SESSION['cart']);
//print_r($vetor);
    $email = $_SESSION['email'];
    //cria registro de venda
    $sql = "INSERT INTO tb_venda(Email, vd_data) VALUES('".$email."',now())";
    mysqli_query($conexao, $sql);

    //busca id do último registro de venda
    $sql = "SELECT MAX(vd_codigo) FROM tb_venda";

    $consulta = mysqli_query($conexao, $sql);
    $resultado = mysqli_fetch_assoc($consulta);
    //var_dump($resultado);
    $vd_codigo = $resultado["MAX(vd_codigo)"];
    //echo $vd_codigo; 

foreach ($vetor as $row => $value){
    $id = mysqli_real_escape_string($conexao, $value["p_id"]);
    $nome = mysqli_real_escape_string($conexao, $value["p_name"]);
    $preco = mysqli_real_escape_string($conexao, $value["p_price"]);
    $quantidade = mysqli_real_escape_string($conexao, $value["p_quantity"]);
    $desconto = 0;

    $sql = "INSERT INTO tb_itemvenda(vd_codigo, pd_codigo, itm_qtde, itm_unitario, itm_desconto) VALUES('".$vd_codigo."','".$id."','".$quantidade."','".$preco."','".$desconto."')";
    mysqli_query($conexao, $sql);
}


//pegar valor total da compra
    $sql = "SELECT SUM(itm_total) FROM tb_itemvenda WHERE vd_codigo = ".$vd_codigo."";
    $consulta = mysqli_query($conexao, $sql);
    $resultado = mysqli_fetch_assoc($consulta);
    $total = $resultado["SUM(itm_total)"];
    var_dump($total);
//atualizar na tabela venda
    $sql = "UPDATE tb_venda SET vd_valor = ".$total." WHERE vd_codigo = ".$vd_codigo."";
    mysqli_query($conexao, $sql);


unset($_SESSION['cart']);
header('Location: index.php');
?>