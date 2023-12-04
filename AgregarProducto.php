<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="css/estilos.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css">
    <link rel="stylesheet" href="css/index.css">
    <link rel="stylesheet" href="css/AgregarProducto.css">
    <link rel="stylesheet" href="https://fonts.googleapis.com/icon?family=Material+Icons">
    <title>MiniMarket - Agregar Producto</title>
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
            <div class="col-lf-8 opIzq">
                <div class="collapse navbar-collapse" id="navbarNav">
                    <ul class="navbar-nav mx-auto">
                        <li class="nav-item ">
                            <a class="nav-link opcNav" href="GestionarProductos.html">
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

    <h1 class="titulo">Agregar Producto</h1>

    <div class="container mt-4">
        <form action='./php/agregar_producto.php' method="post" enctype="multipart/form-data">
            <div class="row">
                <div class="col-md-6">
                    <div class="mb-3">
                        <label for="nombre">Nombre del producto</label>
                        <input type="text" class="form-control campo_borde1" id="nombre" name="nombre"
                            placeholder="Nombre del producto">
                    </div>
                    <div class="mb-3">
                        <label for="descripcion">Descripción (máx. 255 caracteres)</label>
                        <textarea class="form-control campo_borde1" id="descripcion" name="descripcion"
                            placeholder="Descripción del producto" rows="4" maxlength="255" oninput="actualizarContador()"></textarea>
                        <div id="contadorCaracteres">0/255</div>
                    </div>
                    <div class="row">
                        <div class="col-md-6 mb-3">
                            <label for="precio">Precio</label>
                            <input type="number" class="form-control campo_borde1" id="precio" name="precio"
                                placeholder="Precio del producto">
                        </div>
                        <div class="col-md-6 mb-3">
                            <label for="categoria">Categoría</label>
                            <select class="form-control campo_borde1" id="categoria" name="categoria">
                                <option value="noSeleccionado" selected>Seleccione uno</option>
                                <option value="Abarrotes">Abarrotes</option>
                                <option value="Bebidas">Bebidas</option>
                                <option value="Condimentos">Condimentos</option>
                                <option value="CuidadoPersonal">Cuidado Personal</option>
                                <option value="Dulces">Dulces</option>
                                <option value="Lacteos">Lacteos</option>
                                <option value="Limpieza">Limpieza</option>
                            </select>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-6 mb-3">
                            <label for="cantidad">Cantidad de stock</label>
                            <input type="number" class="form-control campo_borde1" id="cantidad" name="cantidad"
                                placeholder="Cantidad en stock del producto">
                        </div>
                        <div class="col-md-6 mb-3">
                            <label for="peso">Peso neto</label>
                            <div class="pesoNeto">
                                <input type="number" class="form-control bordeCant" id="peso" name="peso"
                                    placeholder="Peso neto del producto">
                                <select class="medidaCant" name="medida" id="medida">
                                    <option value="noSeleccionado"></option>
                                    <option value="g">g</option>
                                    <option value="kg">kg</option>
                                    <option value="ml">ml</option>
                                    <option value="lt">lt</option>
                                </select>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="col-md-6 mx-auto text-center">
                    <div class="col-md-6 mx-auto text-center">
                        <div class="image-preview campo_borde1">
                            <!-- La imagen subida se mostrará aquí -->
                        </div>
                        <div class="mb-3">
                            <label for="imgProducto" class="form-label">Subir imagen del producto:</label>
                            <input type="file" class="form-control campo_borde1" id="imgProducto" name="imagen" accept="image/*"
                                onchange="mostrarImagen()">
                        </div>
                    </div>
                </div>

            </div>

            <div class="row mt-3">
                <div class="col-md-6">
                    <a href="GestionarProductos.php">
                        <button type="button" class="btn-azulito w-50">Cancelar</button>
                    </a>
                </div>
                <div class="col-md-6 text-end">
                    <a href="GestionarProductos.php">
                    <button  type="submit" class="btn-amarillo w-50" data-toggle="modal" data-target="#aceptarModal"
                        onclick="validarProducto(event)"><b>Agregar Producto</b></button>
                    </a>
                </div>
            </div>
        </form>
    </div>

    <footer class="footer">
        <div class="container-fluid"></div>
    </footer>

    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"></script>
    <script src="js/validarProducto.js"></script>

</body>

</html>