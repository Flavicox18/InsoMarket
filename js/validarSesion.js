function validarSesion() {
    
    // Obtener referencias a los campos del formulario
    var correo = document.getElementById('correo');
    var contraseña = document.getElementById('contraseña');

    // Verificar si los campos están vacíos
    if (correo.value === '') {
        correo.classList.add('error');
    } else {
        correo.classList.remove('error');
    }

    if (contraseña.value === '') {
        contraseña.classList.add('error');
    } else {
        contraseña.classList.remove('error');
    }

    // Realizar el registro si todos los campos están completos
    if (correo.value !== '' && contraseña.value !== '') {
        // Aquí puedes enviar el formulario o realizar otras acciones
        alert('Se inició con éxito la sesión');
    } else {
        // Detener la acción predeterminada del botón
        event.preventDefault();
    }
}
