<?php
// Inicia la sesión
session_start();

// Función para obtener la información de los productos en base a sus IDs
function obtenerInformacionProductos($idsProductos) {
    // Aquí debes implementar la lógica para obtener la información de los productos desde tu base de datos
    // Utilizaré MySQLi para conectarme a PHPMyAdmin como ejemplo.

    $productos = [];

    // Verifica si hay productos en el carrito
    if (!empty($idsProductos)) {
        // Establece la conexión a la base de datos (reemplaza los valores con tu configuración)
        $conn = new mysqli("localhost", "root", "", "InsoMarket");

        // Verifica si hay errores en la conexión
        if ($conn->connect_error) {
            die("Error de conexión: " . $conn->connect_error);
        }

     // Itera sobre los IDs de los productos
     foreach ($idsProductos as $idProducto) {
        // Utiliza una consulta preparada para prevenir inyecciones SQL
        $stmt = $conn->prepare("SELECT id, nombre, cantidad, precio FROM producto WHERE id = ?");
        $stmt->bind_param("i", $idProducto);
        $stmt->execute();

        // Obtiene los resultados de la consulta
        $result = $stmt->get_result();

        // Verifica si se encontró el producto
        if ($result->num_rows > 0) {
            $producto = $result->fetch_assoc();
            $productos[] = $producto;
        }
    }

    // Cierra la conexión
    $conn->close();
    return $productos;
}
}

// Verifica si hay productos en el carrito
if (!empty($_SESSION['productos_en_carrito'])) {
    // Obtén la información de los productos en el carrito
    $productosEnCarrito = obtenerInformacionProductos($_SESSION['productos_en_carrito']);
    // Imprime mensajes de depuración
    echo "Productos en carrito: ";
    print_r($_SESSION['productos_en_carrito']);
    echo "\nInformación de productos en carrito: ";
    print_r($productosEnCarrito);
} else {
    $productosEnCarrito = [];
}
?>
