$(document).ready(function () {
    // Manejar clic en el botón "Agregar al Carrito"
    $('.btnAgregarCarrito').click(function (e) {
        e.preventDefault();

        // Obtener el ID del producto
        var producto_id = $(this).data('producto-id');

        // Realizar la solicitud AJAX para agregar al carrito
        $.ajax({
            type: 'POST',
            url: './realizarPedido.php',
            data: { producto_id: producto_id },
            success: function (response) {
                // Manejar la respuesta, si es necesario
                console.log(response);
            },
            error: function (error) {
                console.error('Error en la solicitud AJAX:', error);
            }
        });
    });
});
