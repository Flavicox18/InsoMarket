<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="css/estilos.css">
    <link rel="stylesheet" href="css/index.css">
    <title>MiniMarket- Agregar Usuario</title>
</head>

<!--
  -->

<body>
    <header>
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
                                <a class="nav-link opcNav" href="AgregarProducto.html">
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
    </header>
    <!--
  -->
    <main>
        <div class="row">
            <div class="col-md-12">
                <p class="espacio-texto titulo"> Agregar Usuario </p>
                <form class="container container-peque" method="post" action="./php/metodos/metodoAgregarUsuario.php">
                    <div class="row">

                        <div class="col-md-6">
                            <p class="sub_subtitulo_izq">Nombre</p>
                            <input id="nombre" type="text" name="nombre" class="form-control campo_borde">
                        </div>
                        <div class="col-md-6">
                            <p class="sub_subtitulo_izq">Apellido</p>
                            <input id="apellido" type="text" name="apellido" class="form-control campo_borde">
                        </div>

                        <div class="col-md-6">
                            <p class="sub_subtitulo_izq">Cargo</p>
                            <select id="categoria" name="cargo" class="cargo">
                                <option value="Administrador" selected>Administrador</option>
                                <option value="Despachador">Despachador</option>
                                <option value="Repartidor">Repartidor</option>
                            </select>
                        </div>
                        <div class="col-md-6">
                            <p class="sub_subtitulo_izq">Teléfono</p>
                            <input id="telefono" type="number" name="telefono" class="form-control campo_borde">
                        </div>

                        <div class="col-md-6">
                            <p class="sub_subtitulo_izq">Correo</p>
                            <input id="correo" type="email" name="correo" class="form-control campo_borde" placeholder="example@example.com">
                        </div>
                        <div class="col-md-6">
                            <p class="sub_subtitulo_izq">Contraseña</p>
                            <input id="contraseña" type="password" name="contraseña" class="form-control campo_borde" placeholder="************">
                        </div>
                    </div>

                    <div class="row g-3">
                        <div class="col">
                            <a href="MainAdministrador.html" class="link_gs"><button type="button"
                                    class="btn-cancelar"><b>Cancelar</b></button></a>
                        </div>

                        <div class="col">
                            <a href="GestionarUsuario.html" class="link_gs"><button type="submit"
                                    class="btn-confirmar" onclick="validarRegistro()"><b>Agregar Usuario</b></button></a>
                        </div>

                    </div>
                    <br>
                </form>
            </div>
        </div>

    </main>

    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.8/dist/umd/popper.min.js"
        integrity="sha384-I7E8VVD/ismYTF4hNIPjVp/Zjvgyol6VFvRkX/vR+Vc4jQkC+hVqc2pM8ODewa9r"
        crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.min.js"
        integrity="sha384-BBtl+eGJRgqQAUMxJ7pMwbEyER4l1g+O15P+16Ep7Q9Q+zqX6gSbd85u4mG4QzX+"
        crossorigin="anonymous"></script>
    <script src="js/agregarUsuario.js"></script>

    <footer class="fixed-bottom footer">
        <div class="container-fluid"></div>
    </footer>
</body>


</html>