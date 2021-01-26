<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Listagem de Produtos</title>
    <link href="css/bootstrap.min.css" rel="stylesheet">
    <link href="css/navbar.css" rel="stylesheet">
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
            </tr>



        <?php } ?>
        </tr>

        </table>
    </div>


    <!-- JavaScript Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/js/bootstrap.bundle.min.js" integrity="
    sha384-ygbV9kiqUc6oa4msXn9868pTtWMgiQaeYH7/t7LECLbyPA2x65Kgf80OJFdroafW" crossorigin="anonymous"></script>
    <script src="js/bootstrap.min.js"></script>
</body>

</html>