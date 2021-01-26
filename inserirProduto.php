<?php

include 'conexao.php';

$skuproduto = $_POST['skuproduto'];
$nomeproduto = $_POST['nomeproduto'];
$categoria = $_POST['categoria'];
$quantidade = $_POST['quantidade'];
$fornecedor = $_POST['fornecedor'];

$sql = "INSERT INTO `estoque`(`skuproduto`, `nomeproduto`, `categoria`, `quantidade`, `fornecedor`) VALUES ($skuproduto,'$nomeproduto','$categoria', $quantidade,'$fornecedor')";

$inserir = mysqli_query($conexao, $sql);

?>


