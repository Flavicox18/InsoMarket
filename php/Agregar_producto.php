<?php
// Conexión a la base de datos (reemplaza los valores con tus propias credenciales)
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "InsoMarket";

$conn = new mysqli($servername, $username, $password, $dbname);

// Verificar la conexión
if ($conn->connect_error) {
    die("Conexión fallida: " . $conn->connect_error);
}

// Consulta SQL para crear la tabla 'producto' solo si no existe
$sqlCrearTabla = "CREATE TABLE IF NOT EXISTS producto (
    id INT AUTO_INCREMENT PRIMARY KEY,
    nombre VARCHAR(255) NOT NULL,
    descripcion TEXT,
    precio DECIMAL(10, 2) NOT NULL,
    categoria VARCHAR(50) NOT NULL,
    cantidad INT NOT NULL,
    peso DECIMAL(5, 2),
    imagen VARCHAR(255)
)";

// Ejecutar la consulta para crear la tabla si no existe
if ($conn->query($sqlCrearTabla) === TRUE) {
    echo "Tabla 'producto' creada o ya existente.<br>";
} else {
    echo "Error al crear la tabla 'producto': " . $conn->error . "<br>";
}

// Obtener datos del formulario
$nombre = $_POST['nombre'];
$descripcion = $_POST['descripcion'];
$precio = $_POST['precio'];
$categoria = $_POST['categoria'];
$cantidad = $_POST['cantidad'];
$peso = $_POST['peso'];

// Verificar si los campos obligatorios están presentes
if (empty($nombre) || empty($precio) || empty($categoria) || empty($cantidad) || empty($descripcion) || empty($peso)) {
    die("Error: Todos los campos obligatorios deben completarse.");
}

// Manejar la carga de la imagen
$nombreImagen = $_FILES['imagen'];
$directorioImagen = "../img/" . $nombreImagen;  // Ruta donde se guardará la imagen

if (move_uploaded_file($_FILES['imagen']['tmp_name'], $directorioImagen)) {
    // Consulta SQL para insertar el producto con la ruta de la imagen
    $sqlInsertarProducto = "INSERT INTO producto (nombre, descripcion, precio, categoria, cantidad, peso, imagen) 
                            VALUES ('$nombre', '$descripcion', $precio, '$categoria', $cantidad, $peso, '$directorioImagen')";

    // Ejecutar la consulta para insertar el producto
    if ($conn->query($sqlInsertarProducto) === TRUE) {
        // Redirigir a la página de gestionar productos con un mensaje de éxito
        session_start();
        $_SESSION['producto_agregado'] = true;
        header("Location: /InsoMarket/GestionarProductos.php");
        exit();
    } else {
        echo "Error al agregar el producto: " . $conn->error;
    }
} else {
    echo "Error al subir la imagen.";
}

// Cerrar la conexión
$conn->close();
?>
