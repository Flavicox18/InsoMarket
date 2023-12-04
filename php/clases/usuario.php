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

?>
