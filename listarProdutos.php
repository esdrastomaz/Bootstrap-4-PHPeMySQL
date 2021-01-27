<?php require_once "dependencias.php" ?>

<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Listagem de Produtos</title>
</head>

<body>

    <div class="container" style="margin-top: 40px;">
        <h3>Lista de Produtos</h3>
        <br>
        <table class="table">
            <thead>
                <tr>
                    <th scope="col">SKU</th>
                    <th scope="col">Nome Produto</th>
                    <th scope="col">Categoria</th>
                    <th scope="col">Quantidade</th>
                    <th scope="col">Fornecedor</th>
                    <th scope="col">Ação</th>
                </tr>
            </thead>
            <tr>
                <?php
                include 'conexao.php';
                $sql = "SELECT * FROM estoque";
                $busca = mysqli_query($conexao, $sql);

                while ($array = mysqli_fetch_array($busca)) {
                    $id_estoque = $array['id_estoque'];
                    $skuproduto = $array['skuproduto'];
                    $nomeproduto = $array['nomeproduto'];
                    $categoria = $array['categoria'];
                    $quantidade = $array['quantidade'];
                    $fornecedor = $array['fornecedor'];

                ?>
            <tr>
                <td><?php echo $skuproduto  ?></td>
                <td><?php echo $nomeproduto ?></td>
                <td><?php echo $categoria   ?></td>
                <td><?php echo $quantidade  ?></td>
                <td><?php echo $fornecedor  ?></td>
                
                <td>
                <a class="btn btn-warning btn-sm" style="color:white" href="editarProduto.php?id=<?php echo $id_estoque ?>" role="button"><i class="far fa-edit"></i>&nbsp;Editar</a>
                <a class="btn btn-danger btn-sm" style="color:white" href="editarProduto.php?id=<?php echo $id_estoque ?>" role="button"><i class="far fa-trash-alt"></i></i>&nbsp;Excluir</a>
                </td>
            </tr>



        <?php } ?>
        </tr>
        </table>
        <div style="text-align: left;">
            <a href="formularioCadastro.php?id=0" class="btn btn-success btn-sm">Voltar</a>
        </div>
    </div>
</body>

</html>