<!-- inicio do header -->
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    
    <!-- CSS only -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-0evHe/X+R7YkIZDRvuzKMRqM+OrBnVFBL6DOitfPri4tjfHxaWutUpFmBp4vmVor" crossorigin="anonymous">
    <link  rel="stylesheet" href="<?php base_Url()?>/css/styles.css" />
    <title>Azov Cars</title>
</head>
<body class="text-light">
    <div class="container-fluid">
        <div class="row">
            <div class="col">
                <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
                    <div class="container-fluid">
                        <a class="navbar-brand" href="home">Azov Cars</a>
                        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavAltMarkup" aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
                        <span class="navbar-toggler-icon"></span>
                        </button>
                        <div class="collapse navbar-collapse" id="navbarNavAltMarkup">
                        <div class="navbar-nav">
                            <a class="nav-link active" aria-current="page" href="home">Home</a>
                            <a class="nav-link" href="quemsomos">Quem Somos</a>
                            <a class="nav-link" href="contato">Contato</a>
                            <a class="nav-link" href="cadastro">Cadastro</a>
                            <a class="nav-link" href="Login">Login</a>
                            <?php
                                $session = \Config\Services::session(); 
                                if($session->get('logado')){
                            ?>

                            <a href="cadastroCarros" class="nav-link">Cadastrar Carro</a>
                            <a class="nav-link" href="listaCarros">Carros</a>
                            
                            <a class="nav-link" href="pessoa">Usuarios</a>
                            <a class="nav-link" href="sair">Sair</a>
                            <?php
                                } 
                            //fim if
                            ?>
                        </div>
                        </div>
                    </div>
                </nav>
            </div>
        </div>
        <!-- fim do header -->