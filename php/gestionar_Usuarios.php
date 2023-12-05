<?php
// Conexión a la base de datos
include("php/db_config.php");

// Verificar si se ha enviado una solicitud de eliminación
if ($_SERVER["REQUEST_METHOD"] == "POST" && isset($_POST['eliminar_usuario'])) {
    $usuario_id = $_POST['usuario_id'];

    // Consulta SQL para eliminar un usuario por ID
    $sql = "DELETE FROM usuarios WHERE ID = ?";
    
    // Preparar la sentencia
    $stmt = $conn->prepare($sql);

    // Vincular parámetros
    $stmt->bind_param("i", $usuario_id);

    // Ejecutar la sentencia
    if ($stmt->execute()) {
        echo "Usuario eliminado correctamente";
    } else {
        echo "Error al eliminar usuario: " . $stmt->error;
    }

    // Cerrar la conexión y la sentencia preparada
    $stmt->close();
}

// Consulta SQL para obtener usuarios
$sql = "SELECT ID, Nombre, Cargo FROM usuarios";
$result = $conn->query($sql);

// Verificar si hay resultados
if ($result->num_rows > 0) {
    echo '<div class="tabla-container">';
    echo '<table class="table table-hover table-bordered">';
    echo '<thead class="table-dark">';
    echo '<tr class="fila-negra">';
    echo '<th scope="col">Nombre</th>';
    echo '<th scope="col">Tipo de Empleado</th>';
    echo '<th scope="col">Acción</th>';
    echo '</tr>';
    echo '</thead>';
    echo '<tbody>';

    // Mostrar datos de la base de datos en la tabla
    while ($row = $result->fetch_assoc()) {
        echo '<tr>';
        echo '<th scope="row">' . $row["Nombre"] . '</th>';
        echo '<td scope="col">' . $row["Cargo"] . '</td>';
        echo '<td scope="col" class="text-center">';
        // Agregar formulario para eliminar
        echo '<form method="post" onsubmit="return confirm(\'¿Seguro que deseas eliminar este usuario?\');">';
        echo '<input type="hidden" name="usuario_id" value="' . $row["ID"] . '">';
        echo '<button type="submit" class="btn btn-danger btn-sm" name="eliminar_usuario">Eliminar</button>';
        echo '</form>';
        echo '</td>';
        echo '</tr>';
    }

    echo '</tbody>';
    echo '</table>';
    echo '</div>';
} else {
    echo "No se encontraron usuarios.";
}

// Cerrar la conexión
$conn->close();
?>
