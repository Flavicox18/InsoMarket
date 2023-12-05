<?php
    // Realizar la consulta para obtener la lista de productos
    $sqlObtenerProductos = "SELECT id, nombre, descripcion, categoria, cantidad, precio, imagen FROM producto";
    $result = $conn->query($sqlObtenerProductos);

        if ($result->num_rows > 0) {
            while ($row = $result->fetch_assoc()) {

            $imagenRuta = './img/' . $row['imagen'];

            echo '<div class="col-md-3">
            <div class="card custom-card">
            <img src="' . $imagenRuta . '" class="img-fluid" alt="' . $row['nombre'] . '" height="250px" width="250px">
            <div class="card-body">
            <h5 class="card-title">' . $row['nombre'] . '</h5>
            <p class="card-text">Price: S./' . $row['precio'] . '</p>
            <a href="#" class="btn btnAgregarCarrito">Agregar al Carrito</a>
            </div>
            </div>
            <br>
            </div>';
            }
        } else {
            echo '<p>No hay productos disponibles.</p>';
        }

    // Cerrar la conexión
    $conn->close();
?>