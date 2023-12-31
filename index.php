<?php

include 'php/db_config.php';
?>

<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Inso Market</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <link href="css/index.css" rel="stylesheet">
    <link href="css/Catalogo.css" rel="stylesheet">
</head>

<body>
    <nav class="navbar navbar-expand-lg ">
        <div class="container ">
            <div class="col-4">
                <a class="navbar-brand " href="./index.php">
                    <img src="img/Logo.png" alt="Logo" width="75" height="75">
                </a>
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav"
                    aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>
            </div>

            
            <div class="col-lf-4 opIzq">
                <div class="collapse navbar-collapse" id="navbarNav">
                    <ul class="navbar-nav mx-auto">
                        <li class="nav-item ">

                        </li>
                        <li class="nav-item ">
                            <a class="nav-link opcNav" href="./IniciarSesion.php">
                                <img src="img/perfil.svg" height="50px" width="50px">
                                <img src="img/perfilA.svg" height="50px" width="50px">
                                Iniciar Sesion
                            </a>
                        </li>
                        <li class="nav-item ">
                            <a class="nav-link opcNav" href="./IniciarSesion.php">
                                <img src="img/carrito.svg" height="45px" width="45px">
                                <img src="img/carritoA.svg" height="45px" width="45px">
                            </a>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
    </nav>
    <main>
        <div class="container">
            <div class="row">
                <h1>Catalogo</h1>
                <?php
                    include 'php/catalogo.php';
                ?>
            </div>
            <div class="row">
                <?php
                    include 'php/metodos/mostrarProducto.php';
                ?>
            </div>
            <br>
        </div>
        <br>
    </main>
    <footer class=" footer  ">
        <div class="container-fluid"></div>
    </footer>

    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.8/dist/umd/popper.min.js"
        integrity="sha384-I7E8VVD/ismYTF4hNIPjVp/Zjvgyol6VFvRkX/vR+Vc4jQkC+hVqc2pM8ODewa9r"
        crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.min.js"
        integrity="sha384-BBtl+eGJRgqQAUMxJ7pMwbEyER4l1g+O15P+16Ep7Q9Q+zqX6gSbd85u4mG4QzX+"
        crossorigin="anonymous"></script>
</body>