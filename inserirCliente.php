<?php

session_start();
require_once "conexao.php";



$nome = strtoupper($_POST["nomecliente"]);
$endereco = $_POST["enderecocliente"];
$numero = $_POST["numerocliente"];
$complemento = $_POST["complementocliente"];
$cidade = $_POST["cidadecliente"];
$estado = $_POST["estadocliente"];
$cep = $_POST["cepcliente"];
$datanasc = $_POST["datanasccliente"];
$telefone = $_POST["telcliente"];
$celular = $_POST["celcliente"];
$email = $_POST["emailcliente"];   
$idCliente = $_POST["inputIdCliente"];



if (strlen($idCliente) > 0) {
    if ($idCliente != 0) {
        $sql = "UPDATE clientes SET
            nome = '$nome',
            endereco = '$endereco',
            numero = '$numero',
            complemento = '$complemento',
            cidade = '$cidade',
            estado = '$estado',
            cep = '$cep',
            datanascimento = '$datanasc',
            telefone = '$telefone',
            celular = '$celular',
            email = '$email'
            WHERE idCliente = '$idCliente'";
    } else {
        $sql = "INSERT INTO clientes(nome,endereco,numero,complemento,
            cidade,estado,cep,datanascimento,telefone,celular,email)
            VALUES('$nome', '$endereco', '$numero', '$complemento', '$cidade', '$estado', '$cep', '$datanasc', '$telefone', '$celular', '$email')";
    }
    mysqli_query($conexao, $sql);
}    


mysqli_close($conexao);
header("location:listarClientes.php");
