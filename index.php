<?php
require_once "dependencias.php";

$onload = "";
$erro   = isset($_GET['erro']);
if (strlen($erro) > 0) {
   $onload = "onload='alert(\"$erro\")'";
}
?>
<!DOCTYPE html>
<html lang="pt-br">

<head>
   <meta charset="UTF-8">
   <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <title>Café Controle</title>
   <link rel="icon" href="img/favicon/favicon2.ico">
   <!-- Bootstrap core CSS -->


   <!-- Custom styles for this template -->
   <link href="css/login.css" rel="stylesheet">
   <script type="text/javascript">
      function validaTela() {
         var resposta = true;
         var senha = document.getElementById("inputPassword").value;
         if (senha.length == 0) {
            alert('Digite sua senha');
            resposta = false;
         } else if (senha.length > 6) {
            alert('Senha maior que 6 caracteres');
            resposta = false;
         }
         return resposta;
      }
   </script>
</head>

<body class="text-center" <?php echo $onload; ?>>
   <form class="form-signin" method="post" action="redirect.php">
      <!--onsubmit="return validaTela()"-->

      <img class="mb-4" src="img/logo.png" alt="" width="80" height="80">
      <h1 class="h3 mb-3 font-weight-normal">Café Controle</h1>
      <label for="inputEmail" class="sr-only">Endereço de e-mail</label>
      <input type="email" id="inputEmail" name="inputEmail" class="form-control" placeholder="Endereço de E-mail" required autofocus>
      <label for="inputPassword" class="sr-only">Senha</label>
      <input type="password" id="inputPassword" name="inputPassword" class="form-control" placeholder="Senha" required>

      <button class="btn btn-lg btn-primary btn-block" type="submit">Entrar</button>
      <p class="mt-5 mb-3 text-muted">Café Controle &copy; 2021</p>
   </form>
</body>

</html>