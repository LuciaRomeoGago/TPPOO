<?php
     class Mascota { //deberia estar asociado a su dueno = cliente
        private $raza;
        private $edad;
        private $historialMedico;

        public function __construct($raza, $edad, $historialMedico){
            $this->raza=$raza;
            $this->edad=$edad;
            $this->historialMedico=$historialMedico;
        }

        public function getRaza(){
            return $this->raza;
        }

        public function getEdad(){
            return $this->edad;
        }

        public function getHistorialMedico(){
            return $this->historialMedico;
        }

     }