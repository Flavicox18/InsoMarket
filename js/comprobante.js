// comprobante.js
$(document).ready(function(){
    $("#tipoComprobante").change(function(){
        var tipoSeleccionado = $(this).val();

        // Oculta todos los campos
        $("#camposBoleta, #camposFactura").addClass("hidden");

        // Muestra los campos correspondientes al tipo seleccionado
        if (tipoSeleccionado === "Boleta") {
            $("#camposBoleta").removeClass("hidden");
        } else if (tipoSeleccionado === "Factura") {
            $("#camposFactura").removeClass("hidden");
        }
    });
});