<?php
   session_start();
 
   require_once "conexao.php";

   $id_estoque = $_GET['id'];

   //verifico se é vazio:
   if(strlen($id_estoque) > 0){
      $sql = "DELETE FROM estoque WHERE id_estoque = " .$id_estoque;
      mysqli_query($conexao, $sql);
   }else{
      //erro!
   }
   mysqli_close($conexao);
   header("location:listarProdutos.php");
?>