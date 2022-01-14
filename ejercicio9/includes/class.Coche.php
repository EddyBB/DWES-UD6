<?php

    class Coche extends Cuatro_ruedas {
        private int $numero_cadenas_nieve;

        function __construct($color, $peso, $numero_cadenas_nieve, $numeroPuertas){
            $this->numero_cadenas_nieve = $numero_cadenas_nieve;
            parent::__construct($color, $peso, $numeroPuertas);
        }

        public function anyadir_persona($pesoPersona){
            parent::anyadir_persona($pesoPersona);
            if ($this->peso >= 1500 && $this->numero_cadenas_nieve <= 2) {
                return "Atención, ponga 4 cadenas para la nieve.";
            }
        }

        public function anyadir_cadenas_nieve($num){
            $this->numero_cadenas_nieve += $num;
        }

        public function quitar_cadenas_nieve($num){
            $this->numero_cadenas_nieve -= $num;
        }

        public function __get($valor) {
            if (property_exists(get_Class(),$valor)){
                return $this->$valor;
            } else {
                return parent::__get($valor);
            }
        }

        public function __set($atributo, $valor){
            $this->$atributo = $valor;
        }

    }

?>