<!DOCTYPE html>
<html>

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="css/estilos.css">
    <link rel="stylesheet" href="css/index.css">
    <link rel="stylesheet" href="css/DetallePedido.css">
    <title>MiniMarket- Detalle Pedido</title>
</head>

<body>

    <header>
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

    <div class="container d-flex justify-content-between align-items-center">
        <h1 class="titulo">Detalle Pedido</h1>
        <a class="link_sg" href="VerPedidos.php">
            <button class="btn-confirmar">Guardar Cambios</button>
        </a>
    </div>

    <div class="container text-center">
        <div class="row mb-3">
            <div class="col-12 col-md-4">
                <label for="cliente" class="form-label" >Cliente:</label>
                <input id="cliente" class="form-control form-control-sm custom-input" type="text"
                    placeholder="Juan Perez" aria-label="Cliente" disabled>
            </div>

            <div class="col-12 col-md-4">
                <label for="fecha" class="form-label">Fecha:</label>
                <input id="fecha" class="form-control form-control-sm custom-input" type="text" placeholder="14/11/2023 18:00"
                    aria-label="Fecha" disabled>
            </div>

            <div class="col-12 col-md-4">
                <label for="pedido" class="form-label">N° de pedido:</label>
                <input id="pedido" class="form-control form-control-sm custom-input" type="text"
                    placeholder="00000001" aria-label="N° de pedido" disabled>
            </div>

        </div>

        <div class="row mb-5">
            <div class="col-12 col-md-4">
                <label for="direccion" class="form-label">Dirección:</label>
                <input id="direccion" class="form-control form-control-sm custom-input" type="text"
                    placeholder="La Cucardas 12" aria-label="Dirección" disabled>
            </div>

            <div class="col-12 col-md-4">
                <label for="fechaEntrega" class="form-label">Fecha de entrega:</label>
                <input id="fechaEntrega" class="form-control form-control-sm custom-input" type="datetime-local"
                    placeholder="Fecha de entrega" aria-label="Fecha de entrega">
            </div>

            <div class="col-12 col-md-4">
                <label for="estado" class="form-label">Estado:</label>
                <select id="estado" class="form-control form-select form-select-sm custom-input" aria-label="Estado">
                    <option selected>Seleccionar estado</option>
                    <option value="1">Pendiente</option>
                    <option value="2">Listo para entregar</option>
                    <option value="3">Listo para enviar</option>
                    <option value="4">No entregado</option>
                    <option value="5">Entregado</option>
                    <option value="6">Enviado</option>
                </select>
            </div>

        </div>

    </div>

    <div class="container">
        <div class="row mb-3">
            <div class="col-md-6">
                <div class="tabla-container text-left">
                    <table class="table table-hover table-bordered">
                        <thead class="table-dark">
                            <tr class="fila-negra">
                                <th scope="col">N°</th>
                                <th scope="col">Producto</th>
                                <th scope="col">Cantidad</th>
                                <th scope="col">Precio por unidad</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <th scope="row">1</th>
                                <td scope="col">Cola cola light</td>
                                <td scope="col">2</td>
                                <td scope="col">2.50</td>
                            </tr>

                            <tr>
                                <th scope="row">2</th>
                                <td scope="col">Jabón</td>
                                <td scope="col">1</td>
                                <td scope="col">3.50</td>
                            </tr>

                            <tr>
                                <th scope="row">3</th>
                                <td scope="col">Pantene</td>
                                <td scope="col">1</td>
                                <td scope="col">6.50</td>
                            </tr>

                            <tr>
                                <th scope="row">4</th>
                                <td scope="col">Cepillo</td>
                                <td scope="col">1</td>
                                <td scope="col">4.50</td>
                            </tr>

                            <tr>
                                <th scope="row">5</th>
                                <td scope="col">Tomatodo</td>
                                <td scope="col">1</td>
                                <td scope="col">10</td>
                            </tr>

                        </tbody>
                    </table>
                </div>
            </div>

            <div class="col-md-6">
                <div class="campos-container">
                    <label for="estado" class="form-label">Estado:</label>
                    <select id="estado" class="form-control form-select form-select form-select-sm custom-input"
                        aria-label="Otro Campo 1">
                        <option selected>Medio de pago</option>
                        <option value="1">Efectivo</option>
                        <option value="2">Tarjeta</option>
                    </select>

                    <label for="costo" class="form-label">Costo de envío:</label>
                    <input id="costo" class="form-control form-control-sm custom-input" type="text"
                        placeholder="S/. 3.00" aria-label="Texto deshabilitado" disabled readonly>
            
                    <label for="total" class="form-label">Costo de productos:</label>
                    <input id="total" class="form-control form-control-sm custom-input" type="text"
                        placeholder="29.50" aria-label="Texto deshabilitado" disabled readonly>

                    <label for="total" class="form-label">Total:</label>
                    <input id="total" class="form-control form-control-sm custom-input" type="text"
                        placeholder="32.50" aria-label="Texto deshabilitado" disabled readonly>
                </div>
            </div>
        </div>
    </div>

    <footer class=" footer ">
        <div class="container-fluid">
        </div>
    </footer>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>

</body>

</html>