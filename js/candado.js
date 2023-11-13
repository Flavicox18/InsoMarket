document.addEventListener("DOMContentLoaded", function () {
    // Agrega un evento de clic a todos los elementos con la clase "candado"
    var candados = document.querySelectorAll(".candado");

    candados.forEach(function (candado) {
        candado.addEventListener("click", function () {
            // Verifica la clase actual del icono
            if (candado.innerHTML === "lock") {
                // Cambia a la clase del icono abierto si está cerrado
                candado.innerHTML = "lock_open";
            } else {
                // Cambia a la clase del icono cerrado si está abierto
                candado.innerHTML = "lock";
            }
        });
    });
});