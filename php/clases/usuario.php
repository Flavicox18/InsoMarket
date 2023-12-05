<?php

class Usuario {
    public $idUsuario;
    public $correo;
    public $contrasena;
    public $nombre;
    public $apellido;
    public $telefono;
    public $tipoUsuario;

    function __construct($idUsuario, $correo, $contrasena, $nombre, $apellido, $telefono, $tipoUsuario) {
        $this->idUsuario = $idUsuario;
        $this->correo = $correo;
        $this->contrasena = $contrasena;
        $this->nombre = $nombre;
        $this->apellido = $apellido;
        $this->telefono = $telefono;
        $this->tipoUsuario = $tipoUsuario;
    }
}

class Empleado extends Usuario {
    public $tipoEmpleado;

    function __construct($idUsuario, $correo, $contrasena, $nombre, $apellido, $telefono, $tipoUsuario, $tipoEmpleado) {
        parent::__construct($idUsuario, $correo, $contrasena, $nombre, $apellido, $telefono, $tipoUsuario);
        $this->tipoEmpleado = $tipoEmpleado;
    }
}

// Crear conexión a la base de datos
$servername = "localhost";
$username = "root";
$password = "";
$database = "insomarket";

$conn = new mysqli($servername, $username, $password, $database);

// Verificar la conexión
if ($conn->connect_error) {
    die("La conexión falló: " . $conn->connect_error);
}

// Creación de tablas en PHPMyAdmin
$sqlCreateTableUsuario = "
CREATE TABLE IF NOT EXISTS usuario (
    idUsuario INT(8) AUTO_INCREMENT PRIMARY KEY,
    correo VARCHAR(100),
    contrasena VARCHAR(16),
    nombre VARCHAR(50),
    apellido VARCHAR(50),
    telefono INT(9),
    tipoUsuario VARCHAR(10)
)";

$sqlCreateTableEmpleado = "
CREATE TABLE IF NOT EXISTS empleado (
    idEmpleado INT(8) AUTO_INCREMENT PRIMARY KEY,
    tipoEmpleado VARCHAR(20),
    FOREIGN KEY (idEmpleado) REFERENCES usuario(idUsuario)
)";

// Ejecutar consultas
if ($conn->query($sqlCreateTableUsuario) === TRUE) {
    echo "Tabla 'usuario' creada con éxito.\n";
} else {
    echo "Error al crear la tabla 'usuario': " . $conn->error . "\n";
}

if ($conn->query($sqlCreateTableEmpleado) === TRUE) {
    echo "Tabla 'empleado' creada con éxito.\n";
} else {
    echo "Error al crear la tabla 'empleado': " . $conn->error . "\n";
}

// Cerrar conexión
$conn->close();

?>
