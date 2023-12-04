document.addEventListener("DOMContentLoaded", function () {
    // Agrega un evento de clic a todos los elementos con la clase "candado"
    var candados = document.querySelectorAll(".candado");

    candados.forEach(function (candado) {
        candado.addEventListener("click", function () {
            // Verifica la clase actual del icono
            if (candado.innerHTML === "lock") {
                // Cambia a la clase del icono abierto si está cerrado
                candado.innerHTML = "lock_open";
                // Habilita la edición del "Costo de envío"
                habilitarEdicionCostoEnvio(candado);
            } else {
                // Cambia a la clase del icono cerrado si está abierto
                candado.innerHTML = "lock";
                // Deshabilita la edición del "Costo de envío"
                deshabilitarEdicionCostoEnvio(candado);
            }
        });
    });

    function habilitarEdicionCostoEnvio(candado) {
        // Encuentra el elemento "Costo de envío" asociado al candado
        var costoEnvioElement = candado.closest("tr").querySelector(".costo-envio");

        // Habilita la edición del "Costo de envío"
        costoEnvioElement.contentEditable = true;
        costoEnvioElement.focus();
    }

    function deshabilitarEdicionCostoEnvio(candado) {
        // Encuentra el elemento "Costo de envío" asociado al candado
        var costoEnvioElement = candado.closest("tr").querySelector(".costo-envio");

        // Deshabilita la edición del "Costo de envío"
        costoEnvioElement.contentEditable = false;
    }
});
