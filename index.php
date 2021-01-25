<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Formulário de Cadastro</title>
    <link href="css/bootstrap.min.css" rel="stylesheet">
    <link href="css/navbar.css" rel="stylesheet">

    <style>

    #tamanhoContainer{
        width: 500px;
    }
    
    </style>
</head>

<body>
    <div class="container" id="tamanhoContainer" style="margin-top: 40px;">
        <form>
            <div class="form-group">
                <label>Número do Produto</label>
                <input type="number" class="form-control" placeholder="Insira o número do produto">

            </div>

            <div class="form-group">
                <label>Nome do Produto</label>
                <input type="text" class="form-control" placeholder="Insira o nome do produto">
            </div>

            <div class="form-group">
                <label for="exampleFormControlSelect1">Categoria</label>
                <select class="form-control" id="exampleFormControlSelect1">
                    <option>Perifericos</option>
                    <option>Hardware</option>
                    <option>Software</option>
                    <option>Celulares</option>
                    <option>Acessórios</option>
                </select>
            </div>

            <div class="form-group">
                <label>Quantidade do Produto</label>
                <input type="number" class="form-control" placeholder="Insira a quantidade do produto">
            </div>

            <div class="form-group">
                <label for="exampleFormControlSelect1">Fornecedor</label>
                <select class="form-control" id="exampleFormControlSelect1">
                    <option>Fornecedor 1</option>
                    <option>Fornecedor 2</option>
                    <option>Fornecedor 3</option>
                    <option>Fornecedor 4</option>
                    <option>Fornecedor 5</option>
                </select>
            </div>

            <button type="submit" class="btn btn-success btn-sm">Cadastrar</button>

        </form>


        
    </div>






    <!-- JavaScript Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/js/bootstrap.bundle.min.js" integrity="
    sha384-ygbV9kiqUc6oa4msXn9868pTtWMgiQaeYH7/t7LECLbyPA2x65Kgf80OJFdroafW" crossorigin="anonymous"></script>
    <script src="js/bootstrap.min.js"></script>
</body>

</html>