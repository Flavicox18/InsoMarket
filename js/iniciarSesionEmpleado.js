function inicioSesionEmpleado() {
    // Obtener los valores del correo electrónico, contraseña y cargo
    var correo = document.getElementById("correo").value;
    var contraseña = document.getElementById("contraseña").value;
    var cargo = document.getElementById("categoria").value;

    // Validar la contraseña
    var contraseñaValida = /^(?=.*[a-z])(?=.*[A-Z])(?=.*\d).{8,16}$/.test(contraseña);

    // Mostrar mensaje de error si la contraseña no es válida
    if (!contraseñaValida) {
        var mensajeError = "La contraseña debe contener al menos 8 caracteres, una mayúscula, una minúscula y un número.";
        document.getElementById("contraseñaHelp").textContent = mensajeError;
        return false; // Evitar el envío del formulario si la contraseña no es válida
    }
    // Redirigir en función del cargo seleccionado
    switch (cargo) {
        case "Administrador":
            window.location.href = "./MainAdministrador.html";
            break;
        case "Despachador":
            window.location.href = "./VerPedidos.html";
            break;
        case "Repartidor":
            window.location.href = "./VerPedidos.html";
            break;
        default:
            alert("Cargo no reconocido.");
            return false; // Evitar el envío del formulario si el cargo no es reconocido
    }

    // Devolver false para evitar que el formulario se envíe normalmente
    return false;
}