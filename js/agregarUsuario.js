function validarRegistro() {
    
    // Obtener referencias a los campos del formulario
    var nombre = document.getElementById('nombre');
    var apellido = document.getElementById('apellido');
    var dni = document.getElementById('dni');
    var telefono = document.getElementById('telefono');
    var correo = document.getElementById('correo');
    var contraseña = document.getElementById('contraseña');

    // Verificar si los campos están vacíos
    if (nombre.value === '') {
        nombre.classList.add('error');
    } else {
        nombre.classList.remove('error');
    }

    if (apellido.value === '') {
        apellido.classList.add('error');
    } else {
        apellido.classList.remove('error');
    }

    if (dni.value === '') {
        dni.classList.add('error');
    } else {
        dni.classList.remove('error');
    }

    if (telefono.value === '') {
        telefono.classList.add('error');
    } else {
        telefono.classList.remove('error');
    }

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
    if (nombre.value !== '' && apellido.value !== '' && dni.value !== '' && telefono.value !== '' && correo.value !== '' && contraseña.value !== '') {
        // Aquí puedes enviar el formulario o realizar otras acciones
        alert('Registro de nuevo usuario exitoso');
    } else {
        // Detener la acción predeterminada del botón
        event.preventDefault();
    }
}
