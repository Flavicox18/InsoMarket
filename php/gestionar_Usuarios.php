<?php
// Conexión a la base de datos
include("php/db_config.php");

// Verificar si se ha enviado una solicitud de eliminación
if ($_SERVER["REQUEST_METHOD"] == "POST" && isset($_POST['eliminar_usuario'])) {
    $usuario_id = $_POST['usuario_id'];

    // Eliminar primero el empleado asociado
    $sqlEliminarEmpleado = "DELETE FROM empleado WHERE idEmpleado = ?";
    $stmtEliminarEmpleado = $conn->prepare($sqlEliminarEmpleado);
    $stmtEliminarEmpleado->bind_param("i", $usuario_id);
    $stmtEliminarEmpleado->execute();
    $stmtEliminarEmpleado->close();

    // Luego, eliminar el usuario
    $sqlEliminarUsuario = "DELETE FROM usuario WHERE idUsuario = ?";
    $stmtEliminarUsuario = $conn->prepare($sqlEliminarUsuario);
    $stmtEliminarUsuario->bind_param("i", $usuario_id);
    
    // Ejecutar la sentencia
    if ($stmtEliminarUsuario->execute()) {
        echo "Usuario eliminado correctamente";
    } else {
        echo "Error al eliminar usuario: " . $stmtEliminarUsuario->error;
    }

    // Cerrar la conexión y la sentencia preparada
    $stmtEliminarUsuario->close();
}

// Consulta SQL para obtener usuarios y empleados
$sql = "SELECT u.idUsuario, u.nombre, e.tipoEmpleado 
        FROM usuario u 
        LEFT JOIN empleado e ON u.idUsuario = e.idEmpleado 
        WHERE e.tipoEmpleado IS NOT NULL";
$result = $conn->query($sql);

// Verificar si hay resultados
if ($result->num_rows > 0) {
    echo '<div class="tabla-container">';
    echo '<table class="table table-hover table-bordered">';
    echo '<thead class="table-dark">';
    echo '<tr class="fila-negra">';
    echo '<th scope="col">ID</th>';
    echo '<th scope="col">Nombre</th>';
    echo '<th scope="col">Tipo de Empleado</th>';
    echo '<th scope="col">Acción</th>';
    echo '</tr>';
    echo '</thead>';
    echo '<tbody>';

    // Mostrar datos de la base de datos en la tabla
    while ($row = $result->fetch_assoc()) {
        echo '<tr>';
        echo '<th scope="row">' . $row["idUsuario"] . '</th>';
        echo '<td scope="col">' . $row["nombre"] . '</td>';
        echo '<td scope="col">' . $row["tipoEmpleado"] . '</td>';
        echo '<td scope="col" class="text-center">';
        // Agregar formulario para eliminar
        echo '<form method="post" onsubmit="return confirm(\'¿Seguro que deseas eliminar este usuario?\');">';
        echo '<input type="hidden" name="usuario_id" value="' . $row["idUsuario"] . '">';
        echo '<button type="submit" class="btn btn-danger btn-sm" name="eliminar_usuario">Eliminar</button>';
        echo '</form>';
        echo '</td>';
        echo '</tr>';
    }

    echo '</tbody>';
    echo '</table>';
    echo '</div>';
} else {
    echo "No se encontraron usuarios con tipo de empleado.";
}

// Cerrar la conexión
$conn->close();
?>
