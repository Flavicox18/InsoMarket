<?php
session_start();

// Verifica si se ha recibido el parámetro producto_id
if (isset($_POST['producto_id'])) {
    $producto_id = $_POST['producto_id'];

    // Verifica si hay productos en el carrito
    if (!empty($_SESSION['productos_en_carrito'])) {
        // Busca la posición del producto en el carrito
        $posicion = array_search($producto_id, $_SESSION['productos_en_carrito']);

        // Verifica si se encontró el producto en el carrito
        if ($posicion !== false) {
            // Elimina el producto del carrito y reorganiza los índices
            unset($_SESSION['productos_en_carrito'][$posicion]);
            $_SESSION['productos_en_carrito'] = array_values($_SESSION['productos_en_carrito']);

            echo "Producto eliminado del carrito con éxito.";
        } else {
            echo "El producto no se encontró en el carrito.";
        }
    } else {
        echo "No hay productos en el carrito.";
    }
} else {
    echo "Parámetro 'producto_id' no recibido.";
}
?>
