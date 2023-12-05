<?php
// Obtén la información de la conexión a la base de datos desde tu configuración de phpMyAdmin
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "insomarket";

// Crea una conexión a la base de datos
$conn = new mysqli($servername, $username, $password, $dbname);

// Verifica la conexión
if ($conn->connect_error) {
  die("Conexión fallida: " . $conn->connect_error);
}

// Crear la tabla si no existe
$sqlCrearTabla = "CREATE TABLE IF NOT EXISTS Ubicacion (
    id INT AUTO_INCREMENT PRIMARY KEY,
    distrito VARCHAR(255) NOT NULL,
    costo_envio DECIMAL(10, 2) NOT NULL
)";
if ($conn->query($sqlCrearTabla) === TRUE) {
  echo "";
} else {
  echo "Error al crear la tabla: " . $conn->error . "<br>";
}

// Obtener datos del formulario, NO FUNCIONA NO SE PORQUE AYUDA 😥
//$costoEnvio = $_POST["costo_envio"];

//$sql = "UPDATE delivery SET costo_envio = $costoEnvio WHERE id = 1";
//$mysqli->query($sql);

// Cerrar la conexión
$conn->close();
?>

