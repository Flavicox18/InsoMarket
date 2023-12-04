function validarRegistro() {
    // Obtener referencias a los campos del formulario
    var nombre = document.getElementById('nombre');
    var apellido = document.getElementById('apellido');
    var telefono = document.getElementById('telefono');
    var correo = document.getElementById('correo');
    var contraseña = document.getElementById('contrasena'); // Cambiado a 'contrasena'

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

    if (telefono.value === '') {
        telefono.classList.add('error');
    } else {
        telefono.classList.remove('error');
    }

    if (correo.value === '' || !validarFormatoCorreo(correo.value)) {
        correo.classList.add('error');
    } else {
        correo.classList.remove('error');
    }

    if (contraseña.value === '' || !validarFormatoContraseña(contraseña.value)) {
        contraseña.classList.add('error');
    } else {
        contraseña.classList.remove('error');
    }

    // Realizar el registro si todos los campos están completos
    if (nombre.value !== '' && apellido.value !== '' && telefono.value !== '' && correo.value !== '' && contraseña.value !== '') {
        // Aquí puedes enviar el formulario o realizar otras acciones
        alert('Formulario enviado con éxito');
        window.location.href = './IniciarSesion.php';
    } else {
        // Detener la acción predeterminada del botón
        event.preventDefault();
    }
}

function enviarFormulario() {
    document.getElementById("registrarseForm").submit();
 }

// Función para validar el formato del correo
function validarFormatoCorreo(correo) {
    var regexCorreo = /^[^\s@]+@[^\s@]+\.[^\s@]+$/;
    return regexCorreo.test(correo);
}

// Función para validar el formato de la contraseña
function validarFormatoContraseña(contrasena) {
    // Mínimo 8 caracteres, al menos una mayúscula, una minúscula y un número
    var regexContraseña = /^(?=.*[a-z])(?=.*[A-Z])(?=.*\d)[a-zA-Z\d]{8,16}$/;
    return regexContraseña.test(contrasena);
}
