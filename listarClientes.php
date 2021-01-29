<?php
require_once "menu.php";


?>


<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Listagem de Clientes</title>
</head>

<body>

    <div class="container jumbotron" style="margin-top: 40px;">
        <center>
            <h3>Lista de Clientes</h3>
        </center>
        <br>
        <table class="table table-bordered" >
            <thead>
                <tr>
                    <th scope="col">Nome</th>
                    <th scope="col">Celular</th>
                    <th scope="col">E-mail</th>
                    <th scope="col">Cidade</th>
                    <th scope="col">Estado</th>
                    <th scope="col"><a href="clienteCadastro.php?id=0" class="btn btn-success btn-sm"><i class="fas fa-users"></i>&nbsp;Cadastrar Novo Cliente</a></th>
                </tr>
            </thead>
            <tr>
                <?php
                include 'conexao.php';
                $sql = "SELECT * FROM clientes ORDER BY nome";
                $busca = mysqli_query($conexao, $sql);

                while ($array = mysqli_fetch_array($busca)) {
                    $idCliente = $array['idCliente'];                    
                    $nome =      $array['nome'];
                    $celular =   $array['celular'];
                    $email =     $array['email'];
                    $cidade =    $array['cidade'];
                    $estado =    $array['estado'];

                ?>
            <tr>                
                <td><?php echo $nome       ?></td>
                <td><?php echo $celular    ?></td>
                <td><?php echo $email      ?></td>
                <td><?php echo $cidade     ?></td>
                <td><?php echo $estado     ?></td>

                <td>
                    <a class="btn btn-warning btn-sm" style="color:white" href="editarProduto.php?id=<?php echo $idCliente ?>" role="button"><i class="far fa-edit"></i>&nbsp;Editar</a>
                    <?php echo ("<a class='btn btn-danger btn-sm' style='color:white' href='javascript:excluirCliente($idCliente)' role='button'><i class='far fa-trash-alt'></i></i>&nbsp;Excluir</a>") ?>
                </td>
            </tr>



        <?php } ?>
        </tr>
        </table>
    </div>
    <div class="container">
        <footer class="py-4 bg-light mt-auto">
            <div class="container-fluid">
                <div class="d-flex align-items-center justify-content-between small">
                    <div class="text-muted">Copyright &copy; Café Controle 2021</div>
                </div>
            </div>
        </footer>
    </div>

</body>

</html>

<script type="text/javascript">
    function excluirCliente(idCliente){
			alertify.confirm('Atenção!','Deseja Excluir este produto?', function(){ 
				$.ajax({
					type:"POST",
					data:"id=" + idCliente,
					url:"excluirCliente.php?id=" + idCliente,
					success:function(){
                        location.reload();                 
                     
					
						
					
					}
				});
			}, function(){ 
				alertify.error('Cancelado!')
			});
		}
</script>