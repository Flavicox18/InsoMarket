var filaAEliminar;  // Variable para almacenar la fila que se va a eliminar

    // Evento de clic en el ícono para almacenar la fila
    $('.eliminar-icon').on('click', function() {
        filaAEliminar = $(this).closest('tr');
        $('#eliminarModal').modal('show');  // Mostrar el modal al hacer clic en el ícono
    });

    // Evento de clic en el botón "Cancelar" dentro del modal
    $('#cancelarEliminarBtn').on('click', function() {
        // Cierra el modal manualmente
        $('#eliminarModal').modal('hide');
    });

    // Evento de clic en el botón "Eliminar" dentro del modal
    $('#eliminarConfirmarBtn').on('click', function() {
        // Verifica si hay una fila almacenada y elimínala
        if (filaAEliminar) {
            console.log('Eliminar fila llamado');
            filaAEliminar.remove();
            filaAEliminar = null;  // Limpia la variable después de eliminar la fila
            // Cierra el modal manualmente
            $('#eliminarModal').modal('hide');
        }
    });

    // Evento de ocultar modal para limpiar la variable
    $('#eliminarModal').on('hidden.bs.modal', function() {
        filaAEliminar = null;
    });