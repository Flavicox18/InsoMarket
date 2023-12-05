<?php
// Obtén la información de la conexión a la base de datos desde tu configuración de phpMyAdmin
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "insomarket";

// Crea una conexión a la base de datos
$conn = new mysqli($servername, $username, $password, $dbname);

// Verifica la conexión
if ($conn->connect_error) {
  die("Conexión fallida: " . $conn->connect_error);
}

// Crear la base de datos si no existe
$sqlCrearBD = "CREATE DATABASE IF NOT EXISTS insomarket";
if ($conn->query($sqlCrearBD) === TRUE) {
  echo "";
} else {
  echo "" . $conn->error . "<br>";
}

// Seleccionar la base de datos
$conn->select_db("insomarket");

// Crear la tabla si no existe
$sqlCrearTabla = "CREATE TABLE IF NOT EXISTS Ubicacion (
    id INT AUTO_INCREMENT PRIMARY KEY,
    distrito VARCHAR(255) NOT NULL,
    costo_envio DECIMAL(10, 2) NOT NULL
)";
if ($conn->query($sqlCrearTabla) === TRUE) {
  echo "";
} else {
  echo "Error al crear la tabla: " . $conn->error . "<br>";
}

// Consulta para obtener información de la tabla
$query = "SELECT id, distrito, costo_envio FROM Ubicacion";
$result = $conn->query($query);
?>



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

  <nav class="navbar navbar-expand-lg ">
    <div class="container ">
      <div class="col-4">
        <a class="navbar-brand " href="Catalogo.php">
          <img src="img/Logo.png" alt="Logo" width="75" height="75">
        </a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>
      </div>

      <div class="col-lf-8 opIzq">
        <div class="collapse navbar-collapse" id="navbarNav">
          <ul class="navbar-nav mx-auto">
            <li class="nav-item ">
              <a class="nav-link opcNav" href="AgregarProducto.html">
                <img src="img/productos.svg" height="50px" width="50px">
                <img src="img/productosA.svg" height="50px" width="50px">
                Productos
              </a>
            </li>
            <li class="nav-item ">
              <a class="nav-link opcNav" href="GestionarUsuario.html">
                <img src="img/gestionarUsuarios.svg" height="45px" width="45px">
                <img src="img/gestionarUsuariosA.svg" height="45px" width="45px">
                Gestionar Usuarios
              </a>
            </li>
            <li class="nav-item ">
              <a class="nav-link opcNav" href="GestionarDelivery.html">
                <img src="img/gestionarDelivery.svg" height="50px" width="50px">
                <img src="img/gestionarDeliveryA.svg" height="50px" width="50px">
                Gestionar Delivery
              </a>
            </li>
            <li class="nav-item ">
              <a class="nav-link opcNav" href="./index.html">
                <img src="img/perfil.svg" height="45px" width="45px">
                <img src="img/perfilA.svg" height="45px" width="45px">
                Cerrar Sesión
              </a>
            </li>
          </ul>
        </div>
      </div>
    </div>
  </nav>




  <h1 class="container titulo">Gestionar Delivery</h1>

  <div class="tabla-container">
    <table class="table table-hover table-bordered">
      <thead class="table-dark">
        <tr class="fila-negra">
          <th scope="col">Distrito</th>
          <th scope="col" class="editable" >Costo de envío</th>
          <th scope="col">Modificar</th>
        </tr>
      </thead>

      <tbody>

        <?php
        while ($row = $result->fetch_assoc()) {
          $elementoID = $row['id'];
          $distrito = $row['distrito'];
          $costo_envio = $row['costo_envio'];

          echo "<tr>";
          echo "<th scope='row'>$distrito</th>";
          echo "<td scope='col' class='costo-envio editable' data-elementoid='$elementoID'>$costo_envio</td>";
          echo "<td scope='col' class='text-center'><span class='material-icons candado editable' data-elementoid='$elementoID'>lock</span></td>";
          echo "</tr>";
        }
        
        ?>
    <tbody>
      <tr>
      <tr>
          <th scope="row">Victor Larco Herrera</th>
          <td scope="col" class="costo-envio editable">S/.3.00</td>
          <td scope="col" class="text-center">
              <span class="material-icons candado editable" data-elementoid="1">lock</span>
              <button class="guardar" style="display:none;">Guardar</button>
          </td>
      </tr>

      <tr>
        <th scope="row">Trujillo</th>
        <td scope="col" class="costo-envio editable">S/.6.00</td>
        <td scope="col" class="text-center">
              <span class="material-icons candado editable" data-elementoid="1">lock</span>
              <button class="guardar" style="display:none;">Guardar</button>
        </td>
      </tr>

      <tr>
        <th scope="row">Moche</th>
        <td scope="col" class="costo-envio editable">S/.6.00</td>
        <td scope="col" class="text-center">
              <span class="material-icons candado editable" data-elementoid="1">lock</span>
              <button class="guardar" style="display:none;">Guardar</button>
        </td>
      </tr>

      <tr>
        <th scope="row">Salaverry</th>
        <td scope="col" class="costo-envio editable">S/.10.00</td>
        <td scope="col" class="text-center">
              <span class="material-icons candado editable" data-elementoid="1">lock</span>
              <button class="guardar" style="display:none;">Guardar</button>
        </td>
      </tr>

      <tr>
        <th scope="row">La esperanza</th>
        <td scope="col" class="costo-envio editable">S/.10.00</td>
        <td scope="col" class="text-center">
              <span class="material-icons candado editable" data-elementoid="1">lock</span>
              <button class="guardar" style="display:none;">Guardar</button>
        </td>
      </tr>

      <tr>
        <th scope="row">Huanchaco</th>
        <td scope="col" class="costo-envio editable">S/.10.00</td>
        <td scope="col" class="text-center">
              <span class="material-icons candado editable" data-elementoid="1">lock</span>
              <button class="guardar" style="display:none;">Guardar</button>
        </td>
      </tr>

      <tr>
        <th scope="row">Florencia de Mora</th>
        <td scope="col" class="costo-envio editable">S/.10.00</td>
        <td scope="col" class="text-center">
              <span class="material-icons candado editable" data-elementoid="1">lock</span>
              <button class="guardar" style="display:none;">Guardar</button>
        </td>
      </tr>

      <tr>
        <th scope="row">El Porvenir</th>
        <<td scope="col" class="costo-envio editable">S/.12.00</td>
        <td scope="col" class="text-center">
              <span class="material-icons candado editable" data-elementoid="1">lock</span>
              <button class="guardar" style="display:none;">Guardar</button>
        </td>
      </tr>

      <tr>
        <th scope="row">Laredo</th>
        <td scope="col" class="costo-envio editable">S/.15.00</td>
        <td scope="col" class="text-center">
              <span class="material-icons candado editable" data-elementoid="1">lock</span>
              <button class="guardar" style="display:none;">Guardar</button>
        </td>
      </tr>
    </tbody>
    </table>
  </div>


  <footer class="footer fixed-bottom">

    <div class="container-fluid">
    </div>
  </footer>

  <script src="js/candado.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
  <script src="https://code.jquery.com/jquery-3.6.4.min.js"></script>
    <script>
        document.addEventListener("DOMContentLoaded", function () {
            var elementosEditables = document.querySelectorAll(".editable");
            elementosEditables.forEach(function (elemento) {
                elemento.addEventListener("click", function () {
                    if (elemento.classList.contains("candado")) {
                        // Se hizo clic en un candado
                        // Agrega aquí la lógica para abrir/cerrar el candado
                        console.log("Clic en candado");
                    } else if (elemento.classList.contains("costo-envio")) {
                        // Se hizo clic en el costo de envío
                        // Cambiar la celda a un input de tipo número
                        var input = document.createElement("input");
                        input.type = "number";
                        input.value = parseFloat(elemento.textContent.replace('S/.', '')); // Obtener el valor numérico sin el símbolo S/.
                        input.classList.add("edit-input");

                        // Reemplazar el contenido con el input
                        elemento.innerHTML = "";
                        elemento.appendChild(input);

                        // Mostrar el botón de guardar
                        var botonGuardar = elemento.closest("tr").querySelector(".guardar");
                        botonGuardar.style.display = "block";

                        // Ocultar otros botones de guardar
                        document.querySelectorAll(".guardar").forEach(function (btn) {
                            if (btn !== botonGuardar) {
                                btn.style.display = "none";
                            }
                        });
                    }
                });
            });
        });
    </script>

</body>

</html>
<?php
// Cierra la conexión a la base de datos
$conn->close();
?>