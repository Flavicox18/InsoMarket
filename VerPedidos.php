<!DOCTYPE html>
<html>

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="css/estilos.css">
    <link rel="stylesheet" href="css/index.css">
    <link rel="stylesheet" href="css/VerPedidos.css">
    <title>MiniMarket- Ver Pedidos</title>
</head>

<body>

    <header>
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
                                <a class="nav-link opcNav" href="./VerPedidos.php">
                                    <img src="img/misPedidos.svg" height="45px" width="45px">
                                    <img src="img/misPedidosA.svg" height="45px" width="45px">
                                    Pedidos
                                </a>
                            </li>
                            <li class="nav-item ">
                                <a class="nav-link opcNav" href="./index.php">
                                    <img src="img/perfil.svg" height="45px" width="45px">
                                    <img src="img/perfilA.svg" height="45px" width="45px">
                                    Cerrar Sesion
                                </a>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
        </nav>
    </header>

    <h1 class="titulo">Ver Pedidos</h1>

    <div class="tabla-container">

        <table class="table table-hover table-bordered">
            <thead class="table-dark">
                <tr class="fila-negra">
                    <th scope="col">N°</th>
                    <th scope="col">Nombre</th>
                    <th scope="col">Fecha y Hora</th>
                    <th scope="col">Estado</th>
                    <th scope="col">Detalles</th>
                </tr>
            </thead>
            <tbody>
                <tr>
                    <th scope="row">1</th>
                    <td scope="col">Juan Perez</td>
                    <td scope="col">14/11/2023 18:00:52</td>
                    <td scope="col">Pendiente</td>
                    <td scope="col" class="text-center">
                        <a href="DetallePedido.php">
                            <div class="d-grid gap-2 d-md-block">
                                <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" fill="currentColor"
                                    class="bi bi-plus-lg" viewBox="0 0 16 16">
                                    <path fill-rule="evenodd"
                                        d="M8 2a.5.5 0 0 1 .5.5v5h5a.5.5 0 0 1 0 1h-5v5a.5.5 0 0 1-1 0v-5h-5a.5.5 0 0 1 0-1h5v-5A.5.5 0 0 1 8 2Z" />
                                </svg>
                            </div>
                        </a>
                    </td>
                </tr>

                <tr>
                    <th scope="row">2</th>
                    <td scope="col">Edilberto Chavez</td>
                    <td scope="col">01-11-2023 10:12:29</td>
                    <td scope="col">Entregado</td>
                    <td scope="col" class="text-center">
                        <div class="d-grid gap-2 d-md-block">
                            <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" fill="currentColor"
                                class="bi bi-plus-lg" viewBox="0 0 16 16">
                                <path fill-rule="evenodd"
                                    d="M8 2a.5.5 0 0 1 .5.5v5h5a.5.5 0 0 1 0 1h-5v5a.5.5 0 0 1-1 0v-5h-5a.5.5 0 0 1 0-1h5v-5A.5.5 0 0 1 8 2Z" />
                            </svg>
                        </div>
                    </td>
                </tr>

                <tr>
                    <th scope="row">3</th>
                    <td scope="col">Jorge Jara</td>
                    <td scope="col">17-12-2023 09:27:12</td>
                    <td scope="col">Entregado</td>
                    <td scope="col" class="text-center">
                        <div class="d-grid gap-2 d-md-block">
                            <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" fill="currentColor"
                                class="bi bi-plus-lg" viewBox="0 0 16 16">
                                <path fill-rule="evenodd"
                                    d="M8 2a.5.5 0 0 1 .5.5v5h5a.5.5 0 0 1 0 1h-5v5a.5.5 0 0 1-1 0v-5h-5a.5.5 0 0 1 0-1h5v-5A.5.5 0 0 1 8 2Z" />
                            </svg>
                        </div>
                    </td>
                </tr>

                <tr>
                    <th scope="row">4</th>
                    <td scope="col">Armando Caballero</td>
                    <td scope="col">20-12-2023 16:32:51</td>
                    <td scope="col">Entregado</td>
                    <td scope="col" class="text-center">
                        <div class="d-grid gap-2 d-md-block">
                            <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" fill="currentColor"
                                class="bi bi-plus-lg" viewBox="0 0 16 16">
                                <path fill-rule="evenodd"
                                    d="M8 2a.5.5 0 0 1 .5.5v5h5a.5.5 0 0 1 0 1h-5v5a.5.5 0 0 1-1 0v-5h-5a.5.5 0 0 1 0-1h5v-5A.5.5 0 0 1 8 2Z" />
                            </svg>
                        </div>
                    </td>
                </tr>

                <tr>
                    <th scope="row">5</th>
                    <td scope="col">Jaime Diaz</td>
                    <td scope="col">27-12-2023 19:12:21</td>
                    <td scope="col">Entregado</td>
                    <td scope="col" class="text-center">
                        <div class="d-grid gap-2 d-md-block">
                            <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" fill="currentColor"
                                class="bi bi-plus-lg" viewBox="0 0 16 16">
                                <path fill-rule="evenodd"
                                    d="M8 2a.5.5 0 0 1 .5.5v5h5a.5.5 0 0 1 0 1h-5v5a.5.5 0 0 1-1 0v-5h-5a.5.5 0 0 1 0-1h5v-5A.5.5 0 0 1 8 2Z" />
                            </svg>
                        </div>
                    </td>
                </tr>
            </tbody>
        </table>
    </div>

    <footer class=" footer fixed-bottom">
        <div class="container-fluid">

        </div>
    </footer>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>

</body>

</html>