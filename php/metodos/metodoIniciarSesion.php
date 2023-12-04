<?php
session_start();

class MetodoIniciarSesion {
    private $conn;

    public function __construct() {
        // Puedes dejar este constructor vacío si no necesitas inicializar nada al instanciar la clase.
    }

    public function iniciarSesion($correo, $contrasena) {
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

        // Verificar si el correo y la contraseña son válidos
        $sql = "SELECT * FROM usuarios WHERE correo = '$correo' AND contrasena = '$contrasena'";
        $result = $this->conn->query($sql);

        if ($result->num_rows > 0) {
            // Inicio de sesión exitoso
            $row = $result->fetch_assoc();
            $usuario = new Usuario($row['idUsuario'], $row['correo'], $row['contrasena'], $row['nombre'], $row['apellido'], $row['telefono'], $row['tipoUsuario']);

            // Iniciar sesión
            $_SESSION['usuario'] = $usuario;

            // Redirigir a la página del catálogo
            header("Location: ../Catalogo.php");
            exit();
        } else {
            // Inicio de sesión fallido
            echo "Inicio de sesión fallido. Verifica tu correo y contraseña.";
        }

        // Cerrar la conexión a la base de datos
        $this->conn->close();
    }
}

// Crear una instancia del método de inicio de sesión
$metodoIniciarSesion = new MetodoIniciarSesion();

// Obtener los datos del formulario
$correo = $_POST['correo'];
$contrasena = $_POST['contraseña'];

// Llamar al método de inicio de sesión
$metodoIniciarSesion->iniciarSesion($correo, $contrasena);
?>
