    <!DOCTYPE html>
    <html lang="es">

    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
        <link rel="stylesheet" href="css/index.css">
        <link rel="stylesheet" href="css/estilos.css">

        <title>MiniMarket- Registrarse</title>
    </head>


    <body>
        <header>
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
                                    <a class="nav-link opcNav" href="./index.php">
                                        <img src="img/perfil.svg" height="45px" width="45px">
                                        <img src="img/perfilA.svg" height="45px" width="45px">
                                        Cancelar registro
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
                    <p class="espacio-texto titulo"> Registrarse </p>
                    <div class=" container container-peque">
                        <form method="post" action="./php/metodos/metodoRegistrarse.php" id="registrarseForm">
                            <div class="row">

                                <div class="col-md-4">
                                    <label for="nombre" class="sub_subtitulo_izq">Nombre</label>
                                    <input name="nombre" id="nombre" class="form-control campo_borde" type="text" required>
                                </div>

                                <div class="col-md-4">
                                    <label for="apellido" class="sub_subtitulo_izq">Apellido</label>
                                    <input name="apellido" id="apellido" class="form-control campo_borde" type="text" required>
                                </div>

                                <div class="col-md-4">
                                    <label for="telefono" class="sub_subtitulo_izq">Teléfono</label>
                                    <input name="telefono" id="telefono" class="form-control campo_borde" type="number" required>
                                </div>

                                <div class="col-md-6">
                                    <label for="correo" class="sub_subtitulo_izq">Correo</label>
                                    <input name="correo" id="correo" class="form-control campo_borde" type="email" placeholder="example@example.com" required>
                                    <h6 class="textodes">El correo debe tener el formato (@example.com)</h6>
                                </div>

                                <div class="col-md-6">
                                    <label for="contrasena" class="sub_subtitulo_izq">Contraseña</label>
                                    <input name="contrasena" id="contrasena" class="form-control campo_borde" type="password" placeholder="************" required>
                                    <h6 class="textodes">La contraseña debe ser mínimo 8 caracteres, con una Mayuscula, un numero y una minuscula<h6>
                                </div>

                            </div>


                            <div class="row g-3">
                                <div class="col">
                                    <a href="./IniciarSesion.php" class="link_gs"><button type="button" class="btn btn-cancelar"><b>Cancelar</b></button></a>
                                </div>

                                <div class="col">
                                    <button type="submit" class="btn btn-confirmar" onclick="enviarFormulario()"><b>Registrarse</b></button>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>

        </main>

        <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js"></script>
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"></script>
        <script src="js/validarRegistro.js"></script>

    </body>


    </html>