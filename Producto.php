<?php
     class Producto {
        private $codigo;
        private $nombre;
        private $descripcion;
        private $precio;
        private $stock;

        public function __construct($codigo,$nombre,$descripcion,$precio, $stock)
        {
            $this->codigo=$codigo;
            $this->nombre=$nombre;
            $this->descripcion=$descripcion;
            $this->precio=$precio;
            $this->stock=$stock;
        }
     }