<?php

class Login{
    public $correo;
    public $contrasena;

    public function __construct($correo,$contrasena) {
        $this->correo = $correo;
        $this->contrasena = $contrasena;
    }

}

?>