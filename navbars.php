<!doctype html>
<html lang="es">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <link href="css/index.css" rel="stylesheet">
    <title>Inso Market</title>
</head>
  <body>
    <h1>NAVBAR CLIENTE INICIADO SESION</h1>
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
            <div class="col-md-4 barraBusqueda ">
                <form class="d-flex">
                    <select id="categoria" name="categoria" class="form-select categoria">
                        <option value="categoria" selected>Categoria</option>
                        <option value="bebidas">Bebidas</option>
                        <option value="abarrotes">Abarrotes</option>
                    </select>
                    <input class="form-control inputBusqueda" type="text" placeholder="Buscar Producto" aria-label="Search">
                </form>
            </div>
            <div class="col-lf-4 opIzq">
                <div class="collapse navbar-collapse" id="navbarNav">
                    <ul class="navbar-nav mx-auto">
                        <li class="nav-item ">
                            <a class="nav-link opcNav" href="./MisPedidos.php">
                                <img src="img/misPedidos.svg" height="50px" width="50px">
                                <img src="img/misPedidosA.svg" height="50px" width="50px">
                                Mis Pedidos
                            </a>
                        </li>
                        <li class="nav-item ">
                            <a class="nav-link opcNav" href="">
                                <img src="img/perfil.svg" height="50px" width="50px">
                                <img src="img/perfilA.svg" height="50px" width="50px">
                                Mi Perfil
                            </a>
                        </li>
                        <li class="nav-item ">
                            <a class="nav-link opcNav" href="">
                                <img src="img/carrito.svg" height="45px" width="45px">
                                <img src="img/carritoA.svg" height="45px" width="45px">
                            </a>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
    </nav>

    <h1>NAVBAR ADMINISTRDOR</h1>

    <nav class="navbar navbar-expand-lg ">
        <div class="container ">
            <div class="col-4">
                <a class="navbar-brand " href="./index.php">
                    <img src="img/Logo.png" alt="Logo" width="75" height="75">
                </a>
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>
            </div>
            <div class="col-lf-8 opIzq">
                <div class="collapse navbar-collapse" id="navbarNav">
                    <ul class="navbar-nav mx-auto">
                        <li class="nav-item ">
                            <a class="nav-link opcNav" href="./GestionarProductos.php">
                                <img src="img/productos.svg" height="50px" width="50px">
                                <img src="img/productosA.svg" height="50px" width="50px">
                                Productos
                            </a>
                        </li>
                        <li class="nav-item ">
                            <a class="nav-link opcNav" href="./GestionarUsuario.php">
                                <img src="img/gestionarUsuarios.svg" height="45px" width="45px">
                                <img src="img/gestionarUsuariosA.svg" height="45px" width="45px">
                                Gestionar Usuarios
                            </a>
                        </li>
                        <li class="nav-item ">
                            <a class="nav-link opcNav" href="./GestionarDelivery.php">
                                <img src="img/gestionarDelivery.svg" height="50px" width="50px">
                                <img src="img/gestionarDeliveryA.svg" height="50px" width="50px">
                                Gestionar Delivery
                            </a>
                        </li>
                        <li class="nav-item ">
                            <a class="nav-link opcNav" href="">
                                <img src="img/perfil.svg" height="45px" width="45px">
                                <img src="img/perfilA.svg" height="45px" width="45px">
                                Perfil
                            </a>
                        </li>
                    </ul>
                </div>
            </div>            
        </div>
    </nav>

    <h1>NAVBAR EMPLEADOS</h1>

    <nav class="navbar navbar-expand-lg ">
        <div class="container ">
            <div class="col-4">
                <a class="navbar-brand " href="./index.php">
                    <img src="img/Logo.png" alt="Logo" width="75" height="75">
                </a>
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>
            </div>
            <div class="col-lf-8 opIzq">
                <div class="collapse navbar-collapse" id="navbarNav">
                    <ul class="navbar-nav mx-auto">
                        <li class="nav-item ">
                            <a class="nav-link opcNav" href="">
                                <img src="img/perfil.svg" height="45px" width="45px">
                                <img src="img/perfilA.svg" height="45px" width="45px">
                                Perfil
                            </a>
                        </li>
                    </ul>
                </div>
            </div>            
        </div>
    </nav>

    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.8/dist/umd/popper.min.js" integrity="sha384-I7E8VVD/ismYTF4hNIPjVp/Zjvgyol6VFvRkX/vR+Vc4jQkC+hVqc2pM8ODewa9r" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.min.js" integrity="sha384-BBtl+eGJRgqQAUMxJ7pMwbEyER4l1g+O15P+16Ep7Q9Q+zqX6gSbd85u4mG4QzX+" crossorigin="anonymous"></script>
  </body>
</html>
