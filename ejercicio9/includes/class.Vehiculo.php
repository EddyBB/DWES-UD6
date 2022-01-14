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

        public function circula(){
            echo "El vehículo está circulando";
        }

        public function anyadir_persona($pesoPersona){
            $this->peso += $pesoPersona;
        }
    }

?>