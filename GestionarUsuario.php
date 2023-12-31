<!DOCTYPE html>
<html>

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css">
    <link rel="stylesheet" href="css/estilos.css">
    <link rel="stylesheet" href="css/index.css">
    <link rel="stylesheet" href="css/GestionarUsuario.css">
    <link rel="stylesheet" href="https://fonts.googleapis.com/icon?family=Material+Icons">
    <title>MiniMarket - Gestionar Usuario</title>
</head>

<body>

    <nav class="navbar navbar-expand-lg ">
        <div class="container ">
            <div class="col-4">
                <a class="navbar-brand " href="./MainAdministrador.php">
                    <img src="img/Logo.png" alt="Logo" width="75" height="75">
                </a>
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav"
                    aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>
            </div>
            <div class="col-lf-8 opIzq">
                <div class="collapse navbar-collapse" id="navbarNav">
                    <ul class="navbar-nav mx-auto">
                        <li class="nav-item ">
                            <a class="nav-link opcNav" href="AgregarProducto.php">
                                <img src="img/productos.svg" height="50px" width="50px">
                                <img src="img/productosA.svg" height="50px" width="50px">
                                Productos
                            </a>
                        </li>
                        <li class="nav-item ">
                            <a class="nav-link opcNav" href="GestionarUsuario.php">
                                <img src="img/gestionarUsuarios.svg" height="45px" width="45px">
                                <img src="img/gestionarUsuariosA.svg" height="45px" width="45px">
                                Gestionar Usuarios
                            </a>
                        </li>
                        <li class="nav-item ">
                            <a class="nav-link opcNav" href="GestionarDelivery.php">
                                <img src="img/gestionarDelivery.svg" height="50px" width="50px">
                                <img src="img/gestionarDeliveryA.svg" height="50px" width="50px">
                                Gestionar Delivery
                            </a>
                        </li>
                        <li class="nav-item ">
                            <a class="nav-link opcNav" href="./index.php">
                                <img src="img/perfil.svg" height="45px" width="45px">
                                <img src="img/perfilA.svg" height="45px" width="45px">
                                Cerrar Sesión
                            </a>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
    </nav>

    <div class="container d-flex justify-content-between align-items-center">
        <h1 class="titulo">Gestionar Usuario</h1>
        <a href="./AgregarUsuario.php">
            <button class="btn-amarillo">Agregar Usuario</button>
        </a>
    </div>

    <div class="tabla-container">

        <table class="table table-hover table-bordered">
            <thead class="table-dark">
               
            </thead>
            <tbody>
                <?php
                include("php/gestionar_Usuarios.php");
                ?>
            </tbody>
        </table>
    </div>

    <div class="modal" id="eliminarModal" tabindex="-1" role="dialog" aria-labelledby="eliminarModalLabel" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered" role="document">
            <div class="modal-content">
                <div class="modal-body text-center">
                    <!-- Contenido del modal -->
                    <h5 class="modal-title" id="eliminarModalLabel">¿Deseas eliminar el usuario?</h5>
                    <p>¿Estás seguro de que deseas eliminar este empleado?</p>
                    <!-- Botones centrados debajo del texto -->
                    <button type="button" class="btn btn-azulito" id="cancelarEliminarBtn">Cancelar</button>
                    <button type="button" class="btn btn-amarillo" id="eliminarConfirmarBtn">Eliminar</button>
                </div>
            </div>
        </div>
    </div>

    <footer class=" footer fixed-bottom">
        <div class="container-fluid">
        </div>
    </footer>

    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/2.11.6/umd/popper.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
    <script src="js/eliminarUsuario.js"></script>

</body>

</html>

