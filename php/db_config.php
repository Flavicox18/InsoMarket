<?php
$servername = "localhost"; // Puedes cambiarlo según tu configuración
$username = "root";
$password = "";
$dbname = "insomarket";

// Crear conexión
$conn = new mysqli($servername, $username, $password, $dbname);

// Verificar la conexión
if ($conn->connect_error) {
    die("Conexión fallida: " . $conn->connect_error);
} else {
    echo "Conexión exitosa a la base de datos.";
}
?>