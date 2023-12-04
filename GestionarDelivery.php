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
</head>

<body>

  <nav class="navbar navbar-expand-lg ">
    <div class="container ">
      <div class="col-4">
        <a class="navbar-brand " href="Catalogo.php">
          <img src="img/Logo.png" alt="Logo" width="75" height="75">
        </a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav"
          aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
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
          <th scope="col">Costo de envío</th>
          <th scope="col">Modificar</th>
        </tr>
      </thead>
      
      <tbody>
        <tr>
          <th scope="row">Victor Larco Herrera</th>
          <td scope="col">S/.3.00</td>
          <td scope="col" class="text-center"><span class="material-icons">
              <span class="material-icons candado" id="candado">
                lock
              </span>
            </span>
          </td>
        </tr>

        <tr>
          <th scope="row">Trujillo</th>
          <td scope="col">S/.6.00</td>
          <td scope="col" class="text-center"><span class="material-icons">
              <span class="material-icons candado" id="candado">
                lock
              </span>
            </span>
          </td>
        </tr>

        <tr>
          <th scope="row">Moche</th>
          <td scope="col">S/.6.00</td>
          <td scope="col" class="text-center"><span class="material-icons">
              <span class="material-icons candado" id="candado">
                lock
              </span>
            </span>
          </td>
        </tr>

        <tr>
          <th scope="row">Salaverry</th>
          <td scope="col">S/.10.00</td>
          <td scope="col" class="text-center"><span class="material-icons">
              <span class="material-icons candado" id="candado">
                lock
              </span>
            </span>
          </td>
        </tr>

        <tr>
          <th scope="row">La esperanza</th>
          <td scope="col">S/.10.00</td>
          <td scope="col" class="text-center"><span class="material-icons">
              <span class="material-icons candado" id="candado">
                lock
              </span>
            </span>
          </td>
        </tr>

        <tr>
          <th scope="row">Huanchaco</th>
          <td scope="col">S/.10.00</td>
          <td scope="col" class="text-center"><span class="material-icons">
              <span class="material-icons candado" id="candado">
                lock
              </span>
            </span>
          </td>
        </tr>

        <tr>
          <th scope="row">Florencia de Mora</th>
          <td scope="col">S/.10.00</td>
          <td scope="col" class="text-center"><span class="material-icons">
              <span class="material-icons candado" id="candado">
                lock
              </span>
            </span>
          </td>
        </tr>

        <tr>
          <th scope="row">El Porvenir</th>
          <td scope="col">S/.12.00</td>
          <td scope="col" class="text-center"><span class="material-icons">
              <span class="material-icons candado" id="candado">
                lock
              </span>
            </span>
          </td>
        </tr>

        <tr>
          <th scope="row">Laredo</th>
          <td scope="col">S/.15.00</td>
          <td scope="col" class="text-center"><span class="material-icons">
              <span class="material-icons candado" id="candado">
                lock
              </span>
            </span>
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

</body>

</html>