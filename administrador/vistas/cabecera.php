<?php $idTipop = $_SESSION['idTipop']; ?>



<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <title>Prueba de PHP</title>
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width,initial-scale=1.0">


    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-Zenh87qX5JnK2Jl0vWa8Ck2rdkQ2Bzep5IDxbcnCeuOxjzrPF/et3URy9Bv1WTRi" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-OERcA2EqjJCMA+/3y+gxIOqMEjwtxJY7qPCqsdltbNJuaOe923+mo//f6V8Qbsw3" crossorigin="anonymous"></script>
    <script src="https://code.jquery.com/jquery-3.6.1.min.js"></script>

</head>

<body>


    <?php if ($idTipop == 1) { ?>

        <nav class="navbar navbar-expand-md navbar-dark fixed-top " style="background-color: #A61FF9;">
            <div class="container-fluid">
                <a class="navbar-brand" href="#">MakiBeta</a>
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarCollapse" aria-controls="navbarCollapse" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse" id="navbarCollapse">
                    <ul class="navbar-nav me-auto mb-2 mb-md-0">
                        <li class="nav-item active">
                            <a class="nav-link" href="perfilAdmin.php">mi perfil </a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="inicio.php">personas</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="tipo.php">tipo</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="empresas.php">Empresas</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="logout.php">cerrar session</a>
                        </li>

                    </ul>
                </div>
            </div>
        </nav>
    <?php } else {   ?>

        <nav class="navbar navbar-expand-md navbar-dark fixed-top " style="background-color: #A61FF9;">
            <div class="container-fluid">
                <a class="navbar-brand" href="#">Maki</a>
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarCollapse" aria-controls="navbarCollapse" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse" id="navbarCollapse">
                    <ul class="navbar-nav me-auto mb-2 mb-md-0">
                        <li class="nav-item">
                        <a class="nav-link" href="perfilAdmin.php">mi perfil </a>
                        </li>

                        <li class="nav-item">
                        <a class="nav-link" href="empresas.php">Empresas</a>
                        </li>
                        <li class="nav-item">
                        <a class="nav-link" href="logout.php">cerrar session</a>
                        </li>

                    </ul>
                </div>
            </div>
        </nav>
    <?php }  ?>











    <div class="container">
        <div class="row">