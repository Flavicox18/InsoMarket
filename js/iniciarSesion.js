function redirigirACatalogo() {
    // Obtener el valor del correo electrónico y contraseña
    var correo = document.getElementById("correo").value;
    var contraseña = document.getElementById("contraseña").value;

    // Validar la contraseña
    var contraseñaValida = /^(?=.*[a-z])(?=.*[A-Z])(?=.*\d).{8,16}$/.test(contraseña);

    // Mostrar mensaje de error si la contraseña no es válida
    if (!contraseñaValida) {
        var mensajeError = "La contraseña debe contener al menos 8 caracteres, una mayúscula, una minúscula y un número.";
        document.getElementById("contraseñaHelp").textContent = mensajeError;
        return false; // Evitar el envío del formulario si la contraseña no es válida
    }


    // Devolver false para evitar que el formulario se envíe normalmente
    return false;
}