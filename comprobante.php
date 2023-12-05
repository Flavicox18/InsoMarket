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
    <title>Inso Market</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <link href="css/index.css" rel="stylesheet">
    <link href="css/comprobante.css" rel="stylesheet">
</head>

<body>
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
    <script src="js/comprobante.js"></script>

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
        <h1>Hacer Pedido</h1> <br> <div class="ola"> 
                                        <button id="btnSiguiente" onclick="hacerPedido()">Hacer Pedido</button>
                                    </div>
        <form>
            <div>
                <h2>Comprobante</h2>
                <form>
                    <select id="tipoComprobante" name="tipoComprobante" class="tipoComprobante">
                        <option value="noSeleccionado" selected>Selecciona una opcion</option>
                        <option value="Boleta" name="boleta">Boleta</option>
                        <option value="Factura" name="factura">Factura</option>
                    </select>
                </form>
                <!-- Campos para Boleta -->
                <div id="camposBoleta" class="hidden">
                    <div class="row">
                        <div class="form-group col-md-4">
                            <label for="dni">DNI:</label>
                            <input type="number" class="tipoComprobante" id="dni" placeholder="Ingrese su DNI">
                        </div>
                        <div class="form-group col-md-4">
                            <label for="nombre">Nombre:</label>
                            <input type="text" class="tipoComprobante" id="nombre" placeholder="Ingrese su Nombre">
                        </div>
                        <div class="form-group col-md-4">
                            <label for="ubicacion">Ubicación de domicilio:</label>
                            <input type="text" class="tipoComprobante" id="ubicacion" placeholder="Ingrese su Domicilio">
                        </div>
                    </div>
                </div>

                <!-- Campos para Factura -->
                <div id="camposFactura" class="hidden">
                    <div class="row">
                        <div class="form-group col-md-4">
                            <label for="ruc">RUC:</label>
                            <input type="number" class="tipoComprobante" id="ruc" placeholder="Ingrese su RUC">
                        </div>
                        <div class="form-group col-md-4">
                            <label for="nombreEmpresa">Nombre de Empresa:</label>
                            <input type="text" class="tipoComprobante" id="nombreEmpresa" placeholder="Ingrese su Empresa">
                        </div>
                        <div class="form-group col-md-4">
                            <label for="direccion">Dirección:</label>
                            <input type="text" class="tipoComprobante" id="direccion" placeholder="Ingrese la dirección de su Empresa">
                        </div>
                    </div>
                </div>
            </div>
            <div>
                <h2>Datos de contacto</h2>
                <form>
                    <div class="row">
                        <div class="col-8">
                            <p class="tipoLabel">Correo:</p>
                            <input type="email" id="correo" nane="correo" placeholder="Ingrese su correo"
                                class="tipoComprobante">
                        </div>
                        <div class="col-4">
                            <p class="tipoLabel">Telefono:</p>
                            <input type="number" id="correo" nane="correo" placeholder="999 999 999"
                                class="tipoComprobante">
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-8">
                            <p class="tipoLabel">Direccion:</p>
                            <input type="text" id="direccion" nane="direccion"
                                placeholder="Ingrese su dirección completa" class="tipoComprobante">
                        </div>
                        
                        <div class="col-4">
                            <p class="tipoLabel">Distrito:</p>
                            <select id="distrito" name="distrito" class="distrito tipoComprobante">
                                <option value="noSeleccionado" selected>Selecciona una opcion</option>
                                <option value="victorLarcoHerrera" name="victorLarcoHerrera">Victor Larco Herrera (S/.3)
                                </option>
                                <option value="trujillo" name="trujillo">Trujillo (S/.6)</option>
                                <option value="moche" name="moche">Moche (S/.6)</option>
                                <option value="salaverry" name="salaverry">Salaverry (S/.10)</option>
                                <option value="laEsperanza" name="laEsperanza">La Esperanza (S/.10)</option>
                                <option value="huanchaco" name="huanchaco">Huanchaco (S/.10)</option>
                                <option value="florenciaDeMora" name="florenciaDeMora">Florencia De Mora (S/.10)
                                </option>
                                <option value="elPorvenir" name="elPorvenir">El Porvenir (S/.12)</option>
                                <option value="laredo" name="laredo">Laredo (S/.15)</option>
                            </select>
                        </div>
                    </div>
                </form>
            </div>
            <br>

            <div class="container">
                <div class="row">
                  <div class="col-8" class="text-align-left">

                  <table class="table table-hover table-bordered">
                        <thead class="table-dark">
                            <tr class="table-dark">
                                <th scope="col">Productos</th>
                                <th scope="col">Cantidad</th>
                                <th scope="col">Precio C/U</th>
                                <th scope="col">Precio</th>
                            </tr>
                        </thead>
                        <tbody>
                        <?php
            // Verifica si hay productos en el carrito
            if (!empty($productosEnCarrito)) {
                foreach ($productosEnCarrito as $producto) {
                    echo '<tr id="filaProducto_' . $producto['id'] . '">';
                    echo '<td>' . $producto['nombre'] . '</td>';
                    echo '<td class="cantidad" ><input type="number" disabled value="1" min="1" max="' . $producto['cantidad'] . '" id="cantidad_' . $producto['id'] . '"></td>';
                    echo '<td class=precioUnitario>S/.' . $producto['precio'] . '</td>';
                    echo '<td class="precioTotal">S/.' . ($producto['cantidad'] * $producto['precio']) . '</td>';
                    echo '</tr>';
                }
            } else {
                echo '<tr><td colspan="7">No hay productos en el carrito.</td></tr>';
            }
            ?>
                        </tbody>
                    </table>

                    <h2></h2>
                </div>
                  <div class="col-md-4" class="text-align-left">
                  
                    <h4>Método De Pago: Contra entrega</h4> 
                    <h4>Medio de pago:</h4>
                            <select id="estado" name="estado" class="distrito tipoComprobante">
                                <option value="noSeleccionado" selected>Selecciona una opcion</option>
                                <option value="1">Efectivo</option>
                                <option value="2">Tarjeta</option>
                                </option>
                            </select>

                            <p class="tipoLabel">Costo de envío:</p>
                            <input type="text" class="tipoComprobante" id="costo">

                            <p class="tipoLabel">Costo de productos:</p>
                            <input type="text" class="tipoComprobante" id="total">

                            <p class="tipoLabel">Total:</p>
                            <input type="text" class="tipoComprobante" id="total">

                  </div>
                </div>
            </div>

        </form>
    </main>

    <footer class=" footer fixed-bottom">
        <div class="container-fluid"></div>
    </footer>

    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.8/dist/umd/popper.min.js"
        integrity="sha384-I7E8VVD/ismYTF4hNIPjVp/Zjvgyol6VFvRkX/vR+Vc4jQkC+hVqc2pM8ODewa9r"
        crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.min.js"
        integrity="sha384-BBtl+eGJRgqQAUMxJ7pMwbEyER4l1g+O15P+16Ep7Q9Q+zqX6gSbd85u4mG4QzX+"
        crossorigin="anonymous"></script>
    <script src="./js/comprobante.js"></script>

</body>

</html>