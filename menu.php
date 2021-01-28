<?php
require_once "dependencias.php";
?>

<div class="container">
    <nav class="navbar navbar-expand-lg navbar navbar-dark bg-dark">
        <a style="font-weight:bold" class="navbar-brand" href="index.php"><i class="fas fa-coffee"></i>&nbsp;Café Controle</a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#conteudoNavbarSuportado" aria-controls="conteudoNavbarSuportado" aria-expanded="false" aria-label="Alterna navegação">
            <span class="navbar-toggler-icon"></span>
        </button>

        <div class="collapse navbar-collapse" id="conteudoNavbarSuportado">
            <ul class="navbar-nav mr-auto">
                <li class="nav-item active">
                    <a class="nav-link" href="#">Inicio <span class="sr-only">(página atual)</span></a>
                </li>
                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                        Cadastros
                    </a>
                    <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                        <a class="dropdown-item" href="listarProdutos.php"><i class="fas fa-shopping-cart"></i></i>&nbsp;Cadastro de Produtos</a>
                        <div class="dropdown-divider"></div>
                        <a class="dropdown-item" href="#"><i class="fas fa-bars"></i>&nbsp;Cadastro de Categorias</a>
                        <div class="dropdown-divider"></div>
                        <a class="dropdown-item" href="#"><i class="fas fa-address-book"></i>&nbsp;Cadastro de Fornecedores</a>
                        <div class="dropdown-divider"></div>
                        <a class="dropdown-item" href="clienteCadastro.php"><i class="fas fa-users"></i>&nbsp;Cadastro de Clientes</a>
                    </div>
                </li>
            </ul>
            <ul class="navbar-nav navbar-right">
                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                        <i class="fas fa-user"></i>
                    </a>
                    <div class="dropdown-menu" aria-labelledby="dropdown10">
                        <a class="dropdown-item" href="#">Minha Conta</a>
                        <a class="dropdown-item" href="#">Sair</a>
                    </div>
                </li>
            </ul>



        </div>
    </nav>
</div>

