<?php
// Inicia la sesión
session_start();

// Función para agregar un producto al carrito
function agregarProductoAlCarrito($productoId) {
    // Aquí deberías implementar la lógica para agregar el producto al carrito
    // Puedes almacenar los IDs de los productos en un array en la sesión.
    $_SESSION['productos_en_carrito'][] = $productoId;

    // Puedes retornar algún mensaje de éxito si lo necesitas
    return "Producto agregado al carrito con éxito.";
}

// Verifica si se ha recibido el parámetro producto_id
if (isset($_POST['producto_id'])) {
    $productoId = $_POST['producto_id'];

    // Imprime mensajes de depuración
    echo "ID del producto recibido: " . $productoId . "\n";

    // Verifica si el producto ya está en el carrito
    if (!in_array($productoId, $_SESSION['productos_en_carrito'])) {
        // Agrega el producto al carrito solo si no está repetido
        $_SESSION['productos_en_carrito'][] = $productoId;
        $mensaje = "Producto agregado al carrito con éxito.";
    } else {
        $mensaje = "El producto ya está en el carrito.";
    }

    // Imprime mensajes de depuración
    echo $mensaje . "\n";
    echo "Productos en carrito: ";
    print_r($_SESSION['productos_en_carrito']);
} else {
    echo "No se recibió el ID del producto.";
}
?>
