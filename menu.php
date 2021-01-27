<?php
require_once "dependencias.php";
?>

<div class="container">
    <nav class="navbar navbar-expand-lg navbar navbar-dark bg-dark">
        <a class="navbar-brand" href="#"><i class="fas fa-coffee"></i></a>
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
                        <a class="dropdown-item" href="listarProdutos.php">Cadastro de Produtos</a>
                        <div class="dropdown-divider"></div>
                        <a class="dropdown-item" href="#">Cadastro de Categorias</a>
                        <div class="dropdown-divider"></div>
                        <a class="dropdown-item" href="#">Cadastro de Fornecedores</a>
                        <div class="dropdown-divider"></div>
                        <a class="dropdown-item" href="#">Cadastro de Clientes</a>
                    </div>
                </li>
            </ul>
            <ul class="navbar-nav navbar-right">
                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                        Cadastros
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