<?php

require_once 'Usuario.php'; // Asegúrate de incluir la clase base Usuario

class Empleado extends Usuario {
    private $tipoEmpleado;

    public function __construct($correo, $contrasena, $nombre, $apellido, $telefono, $tipo, $tipoEmpleado) {
        parent::__construct($correo, $contrasena, $nombre, $apellido, $telefono, $tipo);
        $this->tipoEmpleado = $tipoEmpleado;
    }

    // Métodos específicos para la clase Empleado
}

?>
