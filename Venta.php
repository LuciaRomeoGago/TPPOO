<?php
    class Venta{ // deberia estar asociado al cliente
        private $ID;
        private $fecha;
        private $total;
        
        public function __construct($ID,$fecha,$total)
        {
            $this->ID=$ID;
            $this->fecha=$fecha;
            $this->total=$total;
        }
    }