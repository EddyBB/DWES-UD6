<?php

    class Vehiculo{
        private string $color;
        private float $peso;

        public function __construct($color, $peso){
            $this->color = $color;
            $this->peso = $peso;
        }

        public function __get($atributo){
            return $this->$atributo;
        }

        public function __set($atributo, $valor){
            $this->$atributo=$valor;
        }

        public function __circula(){
            return "El vehículo está circulando";
        }

        public function __añadir_persona(){

        }
    }

?>