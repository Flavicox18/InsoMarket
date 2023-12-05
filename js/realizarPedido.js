function eliminarProducto(idProducto) {
    // Realizar la solicitud AJAX para eliminar el producto del carrito
    jQuery.ajax({
        type: 'POST',
        url: 'php/metodos/eliminar_producto.php', // Ajusta la ruta según tu estructura
        data: { producto_id: idProducto },
        success: function (response) {
            // Manejar la respuesta, si es necesario
            console.log(response);

            // Eliminar la fila del producto en la interfaz
            var filaProducto = document.getElementById('filaProducto_' + idProducto);
            if (filaProducto) {
                filaProducto.remove();
            }

            // Actualizar el total y otros elementos de la interfaz si es necesario
            // updateTotalPrice(); // Puedes llamar a la función para actualizar el total, si es necesario
        },
        error: function (error) {
            console.error('Error en la solicitud AJAX:', error);
        }
    });
}
