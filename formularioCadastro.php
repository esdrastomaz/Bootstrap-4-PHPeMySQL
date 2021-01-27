<?php 
session_start();
require_once "dependencias.php";

$id_produto = $_GET['id'];
$id_produto = $_SESSION["id"];

if (strlen($id_produto) == 0)
    $id_produto = 0;
?>


<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Formulário de Cadastro</title>
    <style>

    #tamanhoContainer{
        width: 500px;
    }    

    </style>
</head>

<body>

    <div class="container jumbotron" id="tamanhoContainer" style="margin-top: 40px;">
        <center><h4>Formulário de Cadastro</h4></center>
        <form action="inserirProduto.php" method="post" style="margin-top: 20px;">
            <div class="form-group">
                <label>SKU do Produto</label>
                <input type="text" class="form-control" name="skuproduto" placeholder="Insira o SKU do produto" autocomplete="off" required>

            </div>

            <div class="form-group">
                <label>Nome do Produto</label>
                <input type="text" class="form-control" name="nomeproduto" placeholder="Insira o nome do produto" autocomplete="off" required>
            </div>

            <div class="form-group">
                <label for="exampleFormControlSelect1">Categoria</label>
                <select class="form-control" name="categoria">
                    <option>Perifericos</option>
                    <option>Hardware</option>
                    <option>Software</option>
                    <option>Celulares</option>
                    <option>Acessórios</option>
                </select>
            </div>

            <div class="form-group">
                <label>Quantidade do Produto</label>
                <input type="number" class="form-control" name="quantidade" placeholder="Insira a quantidade do produto" autocomplete="off" required>
            </div>

            <div class="form-group">
                <label for="exampleFormControlSelect1">Fornecedor</label>
                <select class="form-control" name="fornecedor">
                    <option>Fornecedor 1</option>
                    <option>Fornecedor 2</option>
                    <option>Fornecedor 3</option>
                    <option>Fornecedor 4</option>
                    <option>Fornecedor 5</option>
                </select>
            </div>
            <input type="hidden" id="inputIdProduto" name="inputIdProduto" value="<?php echo ($id_produto) ?>">
            <div style="text-align: right;">
                <button type="submit" class="btn btn-success btn-sm">Salvar</button>
                <button type="submit" class="btn btn-success btn-sm">Salvar e Voltar</button>                  
            </div>          

        </form>        
    </div>







</body>

</html>

<script type="text/javascript">        
    
</script>