<?php
   session_start();
 
   require_once "conexao.php";

   $idCliente = $_GET['id'];

   //verifico se é vazio:
   if(strlen($idCliente) > 0){
      $sql = "DELETE FROM clientes WHERE idCliente = " .$idCliente;
      mysqli_query($conexao, $sql);
   }else{
      //erro!
   }
   mysqli_close($conexao);
   header("location:listarClientes.php");
?>