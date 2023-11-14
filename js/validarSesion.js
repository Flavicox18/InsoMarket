// validarSesion.js

function validarSesion() {
    // Obtener referencias a los campos del formulario
    var correo = document.getElementById('correo');
    var contraseña = document.getElementById('contraseña');
    var cargo = document.getElementById('categoria');

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

    // Realizar el inicio de sesión si todos los campos están completos
    if (correo.value !== '' && contraseña.value !== '') {
        // Obtener el valor seleccionado en el campo "Cargo"
        var cargoSeleccionado = cargo.value;

        // Redirigir según el cargo seleccionado
        switch (cargoSeleccionado) {
            case "Administrador":
                window.location.href = "MainAdministrador.html";
                break;
            case "Despachador":
                window.location.href = "VerPedidos.html"; // Cambiar al nombre correcto de la interfaz
                break;
            case "Repartidor":
                window.location.href = "VerPedidos.html"; // Cambiar al nombre correcto de la interfaz
                break;
            default:
                alert("Cargo no reconocido");
        }
    } else {
        // Detener la acción predeterminada del botón
        event.preventDefault();
    }
}
