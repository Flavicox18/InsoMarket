<?php
    // Realizar la consulta para obtener la cantidad de productos
    $sqlCantidadProductos = "SELECT COUNT(*) as cantidad FROM producto";
    $resultCantidadProductos = $conn->query($sqlCantidadProductos);

        if ($resultCantidadProductos) {
            $rowCantidadProductos = $resultCantidadProductos->fetch_assoc();
            $cantidad_de_productos = $rowCantidadProductos['cantidad'];
            echo '<p>(' . $cantidad_de_productos . ' productos)</p>';
            } else {
            echo '<p>No hay productos disponibles.</p>';
        }
?>