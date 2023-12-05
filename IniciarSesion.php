<?php
session_start();
?>

<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="css/estilos.css">
    <link rel="stylesheet" href="css/index.css">
    <title>MiniMarket - Iniciar Sesión</title>
</head>

<!--
  -->

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
                <div class="col-lf-4 opIzq">
                    <div class="collapse navbar-collapse" id="navbarNav">
                        <ul class="navbar-nav mx-auto">
                            <li class="nav-item ">
                            </li>
                            <li class="nav-item ">
                                <a class="nav-link opcNav" href="./Registrarse.php">
                                    <img src="img/perfil.svg" height="50px" width="50px">
                                    <img src="img/perfilA.svg" height="50px" width="50px">
                                    Registrarse
                                </a>
                            </li>

                        </ul>
                    </div>
                </div>
            </div>
        </nav>
    </header>

    <main>
        <div class="row ">
            <div class="col-md-12">
                <p class="espacio-texto titulo"> Iniciar Sesión</p>
                <div class=" container container-delgado">
                    <form method="post" id="iniciarSesionFormulario" action="./php/metodos/metodoIniciarSesion.php">
                        <div class="row">
                            <div class="col">
                                <label for="correo" class="sub_subtitulo_izq">Correo</label>
                                <input id="correo" class="form-control campo_borde" type="email" placeholder="example@example.com" required>
                                <small id="correoHelp" class="form-text mensajeError"></small>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col">
                                <label for="contraseña" class="sub_subtitulo_izq">Contraseña</label>
                                <input id="contraseña" class="form-control campo_borde" type="password" placeholder="************" required>
                                <small id="contraseñaHelp" class="form-text mensajeError"></small>
                            </div>
                        </div>
                        <br>
                        <div class="row">
                            <div class="col">
                                <a href="./index.php" class="link_gs"><button type="button" class="btn-cancelar"><b>Cancelar</b></button></a>
                            </div>
                            <div class="col">
                                <button type="submit" class="btn-confirmar"><b>Iniciar Sesión</b></button>
                            </div>
                        </div>
                    </form>

                    <div id="IniciarSesionEmpleado" class="row">
                        <div class="col">
                            <a href="IniciarSesionEmpleado.php" class="link_gs"><button type="button" class=" btn-IsEmp"><b>Iniciar Sesión Empleado</b></button></a>
                        </div>
                    </div>
                    <?php
                    // Mostrar mensaje de error si está presente
                    if (isset($_SESSION['error'])) {
                        echo '<div class="alertaError">' . $_SESSION['error'] . '</div>';
                        unset($_SESSION['error']); // Limpiar el mensaje de error después de mostrarlo
                    }

                    // Mostrar datos enviados desde el formulario (para depuración)
                    if ($_SERVER["REQUEST_METHOD"] == "POST") {
                        echo "<h2>Datos enviados desde el formulario:</h2>";
                        echo "Correo: " . $_POST["correo"] . "<br>";
                        echo "Contraseña: " . $_POST["contraseña"] . "<br>";
                    }
                    ?>
                    <br>
                </div>
            </div>
        </div>

    </main>

    <footer class="fixed-bottom footer">
        <div class="container-fluid"></div>
    </footer>

    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"></script>
    <script src="js/iniciarSesion.js"></script>

</body>


</html>