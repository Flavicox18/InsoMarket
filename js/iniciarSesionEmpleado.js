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

    // Validar el tipo de empleado
    if (cargo === "") {
        alert("Selecciona un tipo de empleado.");
        return false;
    }

    // Devolver true para permitir que el formulario se envíe normalmente al método
    return true;
}
