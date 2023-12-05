<?php

require_once('../clases/usuario.php');

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Recupera los datos del formulario
    $nombre = $_POST["nombre"];
    $apellido = $_POST["apellido"];
    $cargo = $_POST["cargo"];
    $telefono = $_POST["telefono"];
    $correo = $_POST["correo"];
    $contrasena = $_POST["contraseña"];

    // Otras validaciones y procesamientos si es necesario

    // Crear un objeto de la clase Empleado
    $empleado = new Empleado(null, $correo, $contrasena, $nombre, $apellido, $telefono, "empleado", $cargo);

    // Insertar el usuario en la base de datos
    $servername = "localhost";
    $username = "root";
    $password = "";
    $database = "insomarket";

    $conn = new mysqli($servername, $username, $password, $database);

    if ($conn->connect_error) {
        die("La conexión falló: " . $conn->connect_error);
    }

    $sqlInsertUsuario = "INSERT INTO usuario (correo, contraseña, nombre, apellido, telefono, tipo) 
    VALUES ('$empleado->correo', '$empleado->contrasena', '$empleado->nombre', 
            '$empleado->apellido', '$empleado->telefono', '$empleado->tipoUsuario')";


    if ($conn->query($sqlInsertUsuario) === TRUE) {
        // Obtener el ID del último usuario insertado
        $idUsuario = $conn->insert_id;

        // Insertar el empleado en la tabla 'empleado'
        $sqlInsertEmpleado = "INSERT INTO empleado (idEmpleado, tipoEmpleado) 
                              VALUES ('$idUsuario', '$empleado->tipoEmpleado')";

        if ($conn->query($sqlInsertEmpleado) === TRUE) {
            echo "Usuario agregado con éxito.";
            // Redireccionar a GestionarUsuario.php después de 2 segundos
            header("refresh:0.5; url=../../GestionarUsuario.php");
        } else {
            echo "Error al insertar el empleado: " . $conn->error;
        }
    } else {
        echo "Error al insertar el usuario: " . $conn->error;
    }

    $conn->close();
}
