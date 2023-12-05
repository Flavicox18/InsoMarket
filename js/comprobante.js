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


function hacerPedido() {
    // Aquí podrías realizar las acciones necesarias para hacer el pedido
    // ...

    // Muestra la notificación en Windows
    if (window.Notification && Notification.permission === "granted") {
        new Notification("Pedido realizado con éxito");
    } else if (window.Notification && Notification.permission !== "denied") {
        Notification.requestPermission().then(function (permission) {
            if (permission === "granted") {
                new Notification("Pedido realizado con éxito");
            }
        });
    }

    // Redirige al usuario al catálogo
    window.location.href = "./Catalogo.php";
}