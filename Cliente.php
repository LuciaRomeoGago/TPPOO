<?php
    class Cliente {
        private $nombre;
        private $apellido;
        private $dni;
        private $telefono;
        private $direccion;

        public function __construct($nombre,$apellido,$dni, $telefono,$direccion){
            $this->nombre=$nombre;
            $this->apellido=$apellido;
            $this->dni=$dni;
            $this->telefono=$telefono;
            $this->direccion=$direccion;
        }

    }