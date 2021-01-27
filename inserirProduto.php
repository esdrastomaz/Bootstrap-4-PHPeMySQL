<?php

session_start();
require_once "conexao.php";



$skuproduto = $_POST['skuproduto'];
$nomeproduto = $_POST['nomeproduto'];
$categoria = $_POST['categoria'];
$quantidade = $_POST['quantidade'];
$fornecedor = $_POST['fornecedor'];
$id_produto = $_POST['inputIdProduto'];


if (strlen($id_produto) > 0) {
    if ($id_produto != 0) {
        $sql = "UPDATE estoque SET
        skuproduto='$skuproduto',
        nomeproduto='$nomeproduto',
        categoria='$categoria',
        quantidade= '$quantidade',
        fornecedor= '$fornecedor'
        WHERE  id_produto = $id_produto";
    } else {
        $sql = "INSERT INTO estoque (skuproduto, nomeproduto, categoria, quantidade, fornecedor) 
            VALUES ('$skuproduto','$nomeproduto','$categoria', '$quantidade','$fornecedor')";
    }
    mysqli_query($conexao, $sql);
}else{
    //Erro
}
mysqli_close($conexao);
header("location:listarProdutos.php");
