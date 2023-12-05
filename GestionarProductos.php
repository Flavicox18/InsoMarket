<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Inso Market</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <link href="css/index.css" rel="stylesheet">
    <link href="css/GestionarProductos.css" rel="stylesheet">
</head>

<body>
    
    <nav class="navbar navbar-expand-lg ">
        <div class="container ">
            <div class="col-4">
                <a class="navbar-brand " href="index.html">
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
                            <a class="nav-link opcNav" href="./GestionarProductos.html">
                                <img src="img/productos.svg" height="50px" width="50px">
                                <img src="img/productosA.svg" height="50px" width="50px">
                                Productos
                            </a>
                        </li>
                        <li class="nav-item ">
                            <a class="nav-link opcNav" href="GestionarUsuario.html">
                                <img src="img/gestionarUsuarios.svg" height="45px" width="45px">
                                <img src="img/gestionarUsuariosA.svg" height="45px" width="45px">
                                Gestionar Usuarios
                            </a>
                        </li>
                        <li class="nav-item ">
                            <a class="nav-link opcNav" href="GestionarDelivery.html">
                                <img src="img/gestionarDelivery.svg" height="50px" width="50px">
                                <img src="img/gestionarDeliveryA.svg" height="50px" width="50px">
                                Gestionar Delivery
                            </a>
                        </li>
                        <li class="nav-item ">
                            <a class="nav-link opcNav" href="./index.html">
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
    
    <div id="GestionarProductos" class="container">
        <br>
        <div class="row ">
            <div class="col-6">
                <h1>Gestionar Productos</h1>
            </div>
            <div class="col-6 d-flex justify-content-end link-sg">
                <a href="AgregarProducto.php"> <button id="btnSiguiente">Agregar Productos</button></a>
            </div>
        </div>

        <table class="table table-hover table-bordered">
        
        <?php
            // Inicia la sesión para poder acceder a las variables de sesión
            session_start();

            // Muestra el mensaje de éxito si se ha agregado un producto
            if (isset($_SESSION['producto_agregado']) && $_SESSION['producto_agregado']) {
                echo '<div class="alert alert-success" role="alert">
                    Producto agregado exitosamente.
                    </div>';
                // Limpiar la variable de sesión después de mostrar el mensaje
                $_SESSION['producto_agregado'] = false;
            }

            // Conexión a la base de datos (reemplaza los valores con tus propias credenciales)
            $servername = "localhost";
            $username = "root";
            $password = "";
            $dbname = "InsoMarket";

            $conn = new mysqli($servername, $username, $password, $dbname);

            // Verificar la conexión
            if ($conn->connect_error) {
                die("Conexión fallida: " . $conn->connect_error);
            }

            // Consulta SQL para obtener los productos de la base de datos
            $sqlObtenerProductos = "SELECT id, nombre, descripcion, categoria, cantidad, precio, imagen FROM producto";

            // Ejecutar la consulta
            $result = $conn->query($sqlObtenerProductos);

            if ($result->num_rows > 0) {
                // Mostrar los productos en la tabla
                echo '<thead class="table-dark">
                        <tr class="table-dark">
                            <th scope="col">id</th>
                            <th scope="col" colspan="2">Producto</th>
                            <th scope="col">Categoria</th>
                            <th scope="col">Stock</th>
                            <th scope="col">Precio</th>
                        </tr>
                    </thead>
                    <tbody>';

                    while ($row = $result->fetch_assoc()) {
                        // Construye la ruta completa a la imagen
                        $imagenRuta = '/InsoMarket/img/' . $row['imagen'];
                    
                        echo '<tr>
                                <th scope="row">' . $row['id'] . '</th>
                                <td scope="col"><img src="' . $imagenRuta . '" class="img-fluid" alt="' . $row['nombre'] . '" height="50px" width="50px"></td>
                                <td scope="col">' . $row['nombre'] . '</td>
                                <td scope="col">' . $row['categoria'] . '</td>
                                <td scope="col">' . $row['cantidad'] . '</td>
                                <td scope="col">' . $row['precio'] . '</td>
                            </tr>';
                    }                                      

                echo '</tbody>';
            } else {
                echo '<p>No hay productos disponibles.</p>';
            }

            // Cerrar la conexión
            $conn->close();
            ?>
        </table>
    </div>
    <footer class=" footer fixed-bottom   ">
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