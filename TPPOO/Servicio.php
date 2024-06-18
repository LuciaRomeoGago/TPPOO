<?php
    class Servicio {
        private $ID;
        private $descripcion;
        private $precio;

        public function __construct($ID,$descripcion,$precio){
            $this->ID=$ID;
            $this->descripcion=$descripcion;
            $this->precio=$precio;
        }
    }