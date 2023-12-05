<?php
// Inicia la sesión
session_start();

// Función para obtener la información de los productos en base a sus IDs
function obtenerInformacionProductos($idsProductos) {
    // Aquí debes implementar la lógica para obtener la información de los productos desde tu base de datos
    // Utilizaré MySQLi para conectarme a PHPMyAdmin como ejemplo.

    $productos = [];

    // Establece la conexión a la base de datos (reemplaza los valores con tu configuración)
    $conn = new mysqli("localhost", "root", "", "InsoMarket");

    // Verifica si hay errores en la conexión
    if ($conn->connect_error) {
        die("Error de conexión: " . $conn->connect_error);
    }

    // Itera sobre los IDs de los productos
    foreach ($idsProductos as $idProducto) {
        // Utiliza una consulta preparada para prevenir inyecciones SQL
        $stmt = $conn->prepare("SELECT id, nombre, cantidad, precio FROM producto WHERE id = ?");
        $stmt->bind_param("i", $idProducto);
        $stmt->execute();

        // Obtiene los resultados de la consulta
        $result = $stmt->get_result();

        // Verifica si se encontró el producto
        if ($result->num_rows > 0) {
            $producto = $result->fetch_assoc();
            $productos[] = $producto;
        }
    }

    // Cierra la conexión
    $conn->close();

    return $productos;
}

// Verifica si se ha recibido el parámetro producto_id
if (isset($_POST['producto_id'])) {
    $producto_id = $_POST['producto_id'];

    // Agrega el ID del producto al carrito (en la sesión)
    $_SESSION['productos_en_carrito'][] = $producto_id;
}


// Obtén la información de los productos en el carrito
$productosEnCarrito = obtenerInformacionProductos($_SESSION['productos_en_carrito']);
?>

<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css">
    <link href="css/index.css" rel="stylesheet">
    <link href="css/realizarPedido.css" rel="stylesheet">
    <title>Inso Market</title>
</head>

<body>
    
    <nav class="navbar navbar-expand-lg ">
        <div class="container ">
            <div class="col-4">
                <a class="navbar-brand " href="./Catalogo.php">
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
                            <a class="nav-link opcNav" href="./index.php">
                                <img src="img/perfil.svg" height="50px" width="50px">
                                <img src="img/perfilA.svg" height="50px" width="50px">
                                Cerrar Sesión
                            </a>
                        </li>
                        <li class="nav-item ">
                            <a class="nav-link opcNav" href="./realizarPedido.php">
                                <img src="img/carrito.svg" height="45px" width="45px">
                                <img src="img/carritoA.svg" height="45px" width="45px">
                            </a>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
    </nav>

    <main class="container">
        <h1>Hacer Pedido</h1>
        <h2>Detalles del Pedido</h2>
        <table class="table table-hover table-bordered">
            <thead class="table-dark">
                <tr class="table-dark">
                    <th scope="col">Productos</th>
                    <th scope="col">Cantidad</th>
                    <th scope="col">Precio C/U</th>
                    <th scope="col">Precio</th>
                    <th scope="col">Eliminar</th>
                </tr>
            </thead>
            <tbody>
            <?php
            // Verifica si hay productos en el carrito
            if (!empty($productosEnCarrito)) {
                foreach ($productosEnCarrito as $producto) {
                    echo '<tr id="filaProducto_' . $producto['id'] . '">';
                    echo '<td>' . $producto['nombre'] . '</td>';
                    echo '<td class="cantidad"><input type="number" value="1" min="1" max="' . $producto['cantidad'] . '" id="cantidad_' . $producto['id'] . '"></td>';
                    echo '<td class=precioUnitario>S/.' . $producto['precio'] . '</td>';
                    echo '<td class="precioTotal">S/.' . ($producto['cantidad'] * $producto['precio']) . '</td>';
                    echo '<td><button class="btnTabla" onclick="eliminarProducto(' . $producto['id'] . ')">Eliminar</button></td>';
                    echo '</tr>';
                }
            } else {
                echo '<tr><td colspan="7">No hay productos en el carrito.</td></tr>';
            }
            ?>
           </tbody>
        </table>
        <div class="row ">
            <div class="col-6">
                <h3>Método de pago: Pago contra entrega</h3>
            </div>
            <div class="col-6 d-flex justify-content-end">
                <a href="./comprobante.php"> <button id="btnSiguiente">Hacer Pedido</button></a>
            </div>
        </div>
    </main>

    <footer class=" footer fixed-bottom">
        <div class="container-fluid">
        </div>        
    </footer>

    <script src="https://code.jquery.com/jquery-3.5.1.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.8/dist/umd/popper.min.js" integrity="sha384-I7E8VVD/ismYTF4hNIPjVp/Zjvgyol6VFvRkX/vR+Vc4jQkC+hVqc2pM8ODewa9r" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.min.js" integrity="sha384-BBtl+eGJRgqQAUMxJ7pMwbEyER4l1g+O15P+16Ep7Q9Q+zqX6gSbd85u4mG4QzX+" crossorigin="anonymous"></script>
    <script src="./js/realizarPedido.js"></script>

</body>

</html>