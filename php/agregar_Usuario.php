<?php
include("db_config.php");

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Crear conexión a la base de datos
    $conn = new mysqli($servername, $username, $password, $dbname);

    // Verificar la conexión
    if ($conn->connect_error) {
        die("Conexión fallida: " . $conn->connect_error);
    }

    // Obtener datos del formulario
    $nombre = isset($_POST['nombre']) ? $_POST['nombre'] : '';
    $apellido = isset($_POST['apellido']) ? $_POST['apellido'] : '';
    $telefono = isset($_POST['telefono']) ? $_POST['telefono'] : '';
    $correo = isset($_POST['correo']) ? $_POST['correo'] : '';
    $contrasena = isset($_POST['contraseña']) ? $_POST['contraseña'] : ''; // Cambiado a 'contraseña'
    $cargo = isset($_POST['cargo']) ? $_POST['cargo'] : '';

     // Preparar la consulta SQL utilizando parámetros para evitar la inyección SQL
    $sql = "INSERT INTO usuarios (Nombre, Apellido, Telefono, Correo, Contraseña, Cargo) VALUES (?, ?, ?, ?, ?, ?)";

    // Preparar la sentencia
    $stmt = $conn->prepare($sql);

    // Vincular parámetros
    $stmt->bind_param("ssssss", $nombre, $apellido, $telefono, $correo, $hashed_password, $cargo);

    // Ejecutar la sentencia
    if ($stmt->execute()) {
        echo "Usuario agregado correctamente";
    } else {
        echo "Error al agregar usuario: " . $stmt->error;
    }
    // Cerrar la conexión y la sentencia preparada
    $stmt->close();
    $conn->close();
} 
?>

