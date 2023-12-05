<?php
include '../clases/usuario.php';

$servername = "localhost";
$username = "root";
$password = "";
$dbname = "insomarket";

// Crear conexión
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
$contrasena = isset($_POST['contrasena']) ? $_POST['contrasena'] : '';
$tipoUsuario = "cliente"; // Se define como cliente por defecto

// Verificar si se están recibiendo los datos correctamente (opcional)
echo "Nombre: " . $nombre . "<br>";
echo "Apellido: " . $apellido . "<br>";
echo "Teléfono: " . $telefono . "<br>";
echo "Correo: " . $correo . "<br>";
echo "Contraseña: " . $contrasena . "<br>";

// Crear un nuevo objeto Usuario
$usuario = new Usuario(null, $correo, $contrasena, $nombre, $apellido, $telefono, $tipoUsuario);

// Insertar el usuario en la base de datos
$sql = "INSERT INTO usuario (correo, contraseña, nombre, apellido, telefono, tipo) 
        VALUES ('{$usuario->correo}', '{$usuario->contrasena}', '{$usuario->nombre}', '{$usuario->apellido}', '{$usuario->telefono}', '{$usuario->tipoUsuario}')";

if ($conn->query($sql) === TRUE) {
    // Redirigir a la página de inicio de sesión
    header('Location: ../../IniciarSesion.php');
    exit(); // Asegúrate de detener la ejecución del script después de redirigir
} else {
    echo "Error al registrar el usuario: " . $conn->error;
}

// Cerrar la conexión
$conn->close();
?>
