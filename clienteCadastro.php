<?php
session_start();
require_once "menu.php";

$idCliente = $_GET['id'];
$idCliente = $_SESSION["id"];

if (strlen($idCliente) == 0)
    $idCliente = 0;

?>

<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cadastro de Clientes</title>
</head>

<body>
    <script>
        function mascara(t, mask) {
            var i = t.value.length;
            var saida = mask.substring(1, 0);
            var texto = mask.substring(i)
            if (texto.substring(0, 1) != saida) {
                t.value += texto.substring(0, 1);
            }
        }
    </script>
    <div class="container" style="margin-top: 40px;">
        <div class="row">

            <div class="card-abrir-chamado">
                <div class="card">
                    <div class="card-header">
                        Formulário de Cadastro
                    </div>
                    <div class="card-body">
                        <div class="row">
                            <div class="col">
                                <form method="post" action="inserirCliente.php">
                                    <div class="form-row">
                                        <div class="form-group col-md-6">
                                            <label for="inpuntNome">Nome</label>
                                            <input type="text" class="form-control" id="nomecliente" name="nomecliente" placeholder="Nome Completo" required>
                                        </div>
                                        <div class="form-group col-md-6">
                                            <label for="inputCelular">Celular</label>
                                            <input type="tel" class="form-control" id="celcliente" name="celcliente" placeholder="Ex.: 3599999-9999" onkeypress="mascara(this, '#######-####')" maxlength="12" required>
                                        </div>
                                        <div class="form-group col-md-6">
                                            <label for="inputTelefone">Telefone</label>
                                            <input type="tel" class="form-control" id="telcliente" name="telcliente" placeholder="Ex.: 353535-3535" onkeypress="mascara(this, '######-####')" maxlength="11" required>
                                        </div>
                                        <div class="form-group col-md-6">
                                            <label for="inputEmail">Email</label>
                                            <input type="email" class="form-control" id="emailcliente" name="emailcliente" placeholder="Email" required>
                                        </div>
                                        <div class="form-group col-md-6">
                                            <label for="inputDatanasc">Data Nascimento</label>
                                            <input type="date" class="form-control" id="datanasccliente" name="datanasccliente" placeholder="Data Nacimento" required>
                                        </div>
                                        <div class="form-group col-md-6">
                                            <label for="inputAddress">Endereço</label>
                                            <input type="text" class="form-control" id="enderecocliente" name="enderecocliente" placeholder="Rua, Avenida ..." required>
                                        </div>
                                        <div class="form-group col-md-6">
                                            <label for="inputNumber">Número</label>
                                            <input type="number" class="form-control" id="numerocliente" name="numerocliente" placeholder="Número" required>
                                        </div>
                                        <div class="form-group col-md-6">
                                            <label for="inputAddress2">Complemento</label>
                                            <input type="text" class="form-control" id="complementocliente" name="complementocliente" placeholder="Apartamento, hotel, casa, etc." required>
                                        </div>

                                    </div>

                                    <div class="form-row">
                                        <div class="form-group col-md-6">
                                            <label for="inputCity">Cidade</label>
                                            <input type="text" class="form-control" id="cidadecliente" name="cidadecliente" required>
                                        </div>
                                        <div class="form-group col-md-4">
                                            <label for="inputEstado">Estado</label>
                                            <select id="estadocliente" class="form-control" name="estadocliente" required>
                                                <option value="AC">AC</option>
                                                <option value="AL">AL</option>
                                                <option value="AP">AP</option>
                                                <option value="AM">AM</option>
                                                <option value="BA">BA</option>
                                                <option value="CE">CE</option>
                                                <option value="DF">DF</option>
                                                <option value="ES">ES</option>
                                                <option value="GO">GO</option>
                                                <option value="MA">MA</option>
                                                <option value="MT">MT</option>
                                                <option value="MS">MS</option>
                                                <option value="MG">MG</option>
                                                <option value="PA">PA</option>
                                                <option value="PB">PB</option>
                                                <option value="PR">PR</option>
                                                <option value="PE">PE</option>
                                                <option value="PI">PI</option>
                                                <option value="RJ">RJ</option>
                                                <option value="RN">RN</option>
                                                <option value="RS">RS</option>
                                                <option value="RO">RO</option>
                                                <option value="RR">RR</option>
                                                <option value="SC">SC</option>
                                                <option value="SP">SP</option>
                                                <option value="SE">SE</option>
                                                <option value="TO">TO</option>
                                            </select>
                                        </div>
                                        <div class="form-group col-md-2">
                                            <label for="inputCEP">CEP</label>
                                            <input type="text" class="form-control" id="cepcliente" name="cepcliente" onkeypress="mascara(this, '##.###-###')" maxlength="10" required>
                                        </div>
                                    </div>
                                    <input type="hidden" id="inputIdCliente" name="inputIdCliente" value="<?php echo ($idCliente) ?>">
                                    <div style="text-align: right">
                                        <button type="submit" class="btn btn-success btn-sm">Salvar</button>&nbsp;
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</body>

</html>