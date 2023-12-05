<?php
session_start();

require_once '../clases/usuario.php';

class MetodoIniciarSesionEmpleado {
    private $conn;

    public function __construct() {
        // Puedes dejar este constructor vacío si no necesitas inicializar nada al instanciar la clase.
    }

    public function iniciarSesionEmpleado($correo, $contrasena, $tipoEmpleado) {
        // Imprimir datos para depuración
        echo "Correo: $correo, Contraseña: $contrasena, Tipo Empleado: $tipoEmpleado";

        // Configuración de la conexión a la base de datos
        $servername = "localhost"; // Puedes cambiarlo según tu configuración
        $username = "root";
        $password = "";
        $dbname = "insomarket";

        // Crear conexión
        $this->conn = new mysqli($servername, $username, $password, $dbname);

        // Verificar la conexión
        if ($this->conn->connect_error) {
            die("Conexión fallida: " . $this->conn->connect_error);
        }

        // Preparar la consulta SQL con marcadores de posición
        $sql = "SELECT * FROM usuario INNER JOIN empleado ON usuario.idUsuario = empleado.idEmpleado WHERE correo = ? AND contraseña = ? AND tipoEmpleado = ?";

        // Preparar la declaración
        $stmt = $this->conn->prepare($sql);

        // Vincular los parámetros
        $stmt->bind_param("sss", $correo, $contrasena, $tipoEmpleado);

        // Ejecutar la consulta
        $stmt->execute();

        // Obtener el resultado
        $result = $stmt->get_result();

        if ($result->num_rows > 0) {
            // Inicio de sesión exitoso
            $row = $result->fetch_assoc();
            $empleado = new Empleado($row['idUsuario'], $row['correo'], $row['contraseña'], $row['nombre'], $row['apellido'], $row['telefono'], $row['tipoUsuario'], $row['tipoEmpleado']);

            // Iniciar sesión
            $_SESSION['empleado'] = $empleado;

            // Redirigir a la página correspondiente según el tipo de empleado
            switch ($tipoEmpleado) {
                case "Administrador":
                    //header("Location: ../../MainAdministrador.php");
                    break;
                case "Despachador":
                    // Redirección para Despachador
                    break;
                case "Repartidor":
                    // Redirección para Repartidor
                    break;
                default:
                    // Manejar cualquier otro caso aquí
            }
            exit();
        } else {
            // Inicio de sesión fallido
            $_SESSION['error'] = "Inicio de sesión fallido. Verifica tu correo, contraseña y tipo de empleado.";

            // Redirigir de nuevo a la página de inicio de sesión
            header("Location: ../../IniciarSesionEmpleado.php");
            exit();
        }

        // Cerrar la declaración después de usarla
        $stmt->close();

        // Cerrar la conexión a la base de datos
        $this->conn->close();
    }
}

// Crear una instancia del método de inicio de sesión para empleados
$metodoIniciarSesionEmpleado = new MetodoIniciarSesionEmpleado();

// Obtener el valor del correo electrónico, contraseña y tipo de empleado
$correo = isset($_POST['correo']) ? $_POST['correo'] : null;
$contrasena = isset($_POST['contraseña']) ? $_POST['contraseña'] : null;
$tipoEmpleado = isset($_POST['tipoEmpleado']) ? $_POST['tipoEmpleado'] : null;

// Llamar al método de inicio de sesión para empleados
$metodoIniciarSesionEmpleado->iniciarSesionEmpleado($correo, $contrasena, $tipoEmpleado);
?>
