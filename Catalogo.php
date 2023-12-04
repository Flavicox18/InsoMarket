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
                <a class="navbar-brand " href="Catalogo.html">
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
                    <input class="form-control inputBusqueda" type="text" placeholder="Buscar Producto"
                        aria-label="Search">
                </form>
            </div>
            <div class="col-lf-4 opIzq">
                <div class="collapse navbar-collapse" id="navbarNav">
                    <ul class="navbar-nav mx-auto">
                        <li class="nav-item ">
                            <a class="nav-link opcNav" href="MisPedidos.html">
                                <img src="img/misPedidos.svg" height="50px" width="50px">
                                <img src="img/misPedidosA.svg" height="50px" width="50px">
                                Mis Pedidos
                            </a>
                        </li>
                        <li class="nav-item ">
                            <a class="nav-link opcNav" href="./index.html">
                                <img src="img/perfil.svg" height="50px" width="50px">
                                <img src="img/perfilA.svg" height="50px" width="50px">
                                Cerrar Sesión
                            </a>
                        </li>
                        <li class="nav-item ">
                            <a class="nav-link opcNav" href="hacerPedido.html">
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
                // Conecta a la base de datos
                $servername = "localhost";
                $username = "root";
                $password = "";
                $dbname = "InsoMarket";

                $conn = new mysqli($servername, $username, $password, $dbname);

                // Verificar la conexión
                if ($conn->connect_error) {
                    die("Conexión fallida: " . $conn->connect_error);
                }

                // Realizar la consulta para obtener la cantidad de productos
                $sqlCantidadProductos = "SELECT COUNT(*) as cantidad FROM producto";
                $resultCantidadProductos = $conn->query($sqlCantidadProductos);

                if ($resultCantidadProductos) {
                    $rowCantidadProductos = $resultCantidadProductos->fetch_assoc();
                    $cantidad_de_productos = $rowCantidadProductos['cantidad'];
                    echo '<p>(' . $cantidad_de_productos . ' productos)</p>';
                } else {
                    echo '<p>No hay productos disponibles.</p>';
                }
                ?>
            </div>
            <div class="row">

            <?php
                // Realizar la consulta para obtener la lista de productos
                $sqlObtenerProductos = "SELECT id, nombre, descripcion, categoria, cantidad, precio, imagen FROM producto";
                $result = $conn->query($sqlObtenerProductos);

                if ($result->num_rows > 0) {
                    while ($row = $result->fetch_assoc()) {

                        $imagenRuta = '/InsoMarket/img/' . $row['imagen'];

                        echo '<div class="col-md-3">
                                <div class="card custom-card">
                                <img src="' . $imagenRuta . '" class="img-fluid" alt="' . $row['nombre'] . '" height="250px" width="250px">
                                    <div class="card-body">
                                        <h5 class="card-title">' . $row['nombre'] . '</h5>
                                        <p class="card-text">Price: $' . $row['precio'] . '</p>
                                        <a href="#" class="btn btnAgregarCarrito">Agregar al Carrito</a>
                                    </div>
                                </div>
                                <br>
                            </div>';
                    }
                } else {
                    echo '<p>No hay productos disponibles.</p>';
                }

                // Cerrar la conexión
                $conn->close();
                ?>

            </div>
            <br>
        </div>
        <br>
    </main>
    <footer class=" footer  ">
        <div class="container-fluid">

        </div>
    </footer>

    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.8/dist/umd/popper.min.js"
        integrity="sha384-I7E8VVD/ismYTF4hNIPjVp/Zjvgyol6VFvRkX/vR+Vc4jQkC+hVqc2pM8ODewa9r"
        crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.min.js"
        integrity="sha384-BBtl+eGJRgqQAUMxJ7pMwbEyER4l1g+O15P+16Ep7Q9Q+zqX6gSbd85u4mG4QzX+"
        crossorigin="anonymous"></script>
</body>