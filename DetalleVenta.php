<?php
    class DetalleVenta extends Venta{ 
        private $codigo;
        private $cantidad;
        private $precio;
        //debe faltar info, no?

        public function __construct($codigo,$cantidad,$precio)
        {
            $this->codigo=$codigo;
            $this->cantidad=$cantidad;
            $this->precio=$precio;
        }
    }