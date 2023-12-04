<?php
session_start();

class MetodoIniciarSesion {
    private $conn;

    public function __construct() {
        // Puedes dejar este constructor vacío si no necesitas inicializar nada al instanciar la clase.
    }

    public function iniciarSesion($correo, $contraseña) {
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
        $sql = "SELECT * FROM usuario WHERE correo = ? AND contraseña = ?";
        
        // Preparar la declaración
        $stmt = $this->conn->prepare($sql);

        // Vincular los parámetros
        $stmt->bind_param("ss", $correo, $contraseña);

        // Ejecutar la consulta
        $stmt->execute();

        // Obtener el resultado
        $result = $stmt->get_result();

        if ($result->num_rows > 0) {
            // Inicio de sesión exitoso
            $row = $result->fetch_assoc();
            $usuario = new Usuario($row['idUsuario'], $row['correo'], $row['contraseña'], $row['nombre'], $row['apellido'], $row['telefono'], $row['tipoUsuario']);

            // Iniciar sesión
            $_SESSION['usuario'] = $usuario;

            // Redirigir a la página del catálogo
            header("Location: ../Catalogo.php");
            exit();
        } else {
            // Inicio de sesión fallido
            $_SESSION['error'] = "Inicio de sesión fallido. Verifica tu correo y contraseña.";
            
            // Redirigir de nuevo a la página de inicio de sesión
            header("Location: ../../IniciarSesion.php");
            exit();
        }

        // Cerrar la declaración después de usarla
        $stmt->close();

        // Cerrar la conexión a la base de datos
        $this->conn->close();
    }
}

// Crear una instancia del método de inicio de sesión
$metodoIniciarSesion = new MetodoIniciarSesion();

// Obtener el valor del correo electrónico y contraseña
$correo = isset($_POST['correo']) ? $_POST['correo'] : null;
$contraseña = isset($_POST['contraseña']) ? $_POST['contraseña'] : null;

// Llamar al método de inicio de sesión
$metodoIniciarSesion->iniciarSesion($correo, $contraseña);
?>
