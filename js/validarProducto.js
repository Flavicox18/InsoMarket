function validarProducto(event) {
    console.log('La función validarProducto se está ejecutando.'); // Verifica si la función se está llamando correctamente

    // Obtener referencias a los campos del formulario
    var nombre = document.getElementById('nombre');
    var descripcion = document.getElementById('descripcion');
    var precio = document.getElementById('precio');
    var categoria = document.getElementById('categoria');
    var cantidad = document.getElementById('cantidad');
    var peso = document.getElementById('peso');

    // Verificar si los campos están vacíos
    if (nombre.value === '') {
        nombre.classList.add('error');
    } else {
        nombre.classList.remove('error');
    }

    if (descripcion.value === '') {
        descripcion.classList.add('error');
    } else {
        descripcion.classList.remove('error');
    }

    if (precio.value === '') {
        precio.classList.add('error');
    } else {
        precio.classList.remove('error');
    }

    if (categoria.value === '') {
        categoria.classList.add('error');
    } else {
        categoria.classList.remove('error');
    }

    if (cantidad.value === '') {
        cantidad.classList.add('error');
    } else {
        cantidad.classList.remove('error');
    }

    if (peso.value === '') {
        peso.classList.add('error');
    } else {
        peso.classList.remove('error');
    }

    // Realizar el registro si todos los campos están completos
    if (nombre.value !== '' && descripcion.value !== '' && precio.value !== '' && categoria.value !== '' && cantidad.value !== '' && peso.value !== '') {
        // Aquí puedes enviar el formulario o realizar otras acciones
        alert('Formulario enviado con éxito');
        window.history.back();
    } else {
        // Detener la acción predeterminada del botón
        event.preventDefault();

        // Puedes agregar un mensaje de error adicional aquí si lo deseas
        console.log('Todos los campos deben completarse.');
    }
}