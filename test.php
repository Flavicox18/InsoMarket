<!DOCTYPE html>
<html>

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="css/estilos.css">
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css">
  <link rel="stylesheet" href="css/index.css">
  <link rel="stylesheet" href="css/GestionarDelivery.css">
  <link rel="stylesheet" href="https://fonts.googleapis.com/icon?family=Material+Icons">
  <title>MiniMarket - Gestionar Delivery</title>

  <style>
        .editable {
            cursor: pointer;
        }

        .editable:hover {
            background-color: #f2f2f2;
        }

        .edit-input {
            width: 80px;
        }
    </style>
</head>




<body>

    <div class="row">
        <div class="col-md-6">
          <h2>Distrito</h2>
          <input type="text" id="distrito" value="">
        </div>
        <div class="col-md-6">
          <h2>Costo de envío</h2>
          <input type="number" id="costo_envio" value="">
          <i class="fas fa-lock" id="candado"></i>
        </div>
      </div>
      
        

</body>

</html>

<script>
  // Obtener el elemento DOM del candado
const candado = document.getElementById("candado");

// Obtener el elemento DOM de la columna del costo de envío
const costoEnvio = document.getElementById("costo_envio");

// Agregar un evento onclick al candado
candado.addEventListener("click", function() {
  // Si el candado está cerrado, abrirlo
  if (candado.classList.contains("cerrado")) {
    candado.classList.remove("cerrado");
    candado.classList.add("abierto");

    // Permitir la edición del costo de envío
    costoEnvio.disabled = false;
  } else {
    // Cerrar el candado
    candado.classList.remove("abierto");
    candado.classList.add("cerrado");

    // Denegar la edición del costo de envío
    costoEnvio.disabled = true;
  }
});

</script>