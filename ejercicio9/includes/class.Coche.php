<?php

    class Coche extends Cuatro_ruedas {
        private int $numero_cadenas_nieve;

        function __construct($color, $peso, $numero_puertas, $numero_cadenas_nieve){
            parent::__construct($color, $peso, $numero_puertas);
            $this->numero_cadenas_nieve = $numero_cadenas_nieve;
            
        }

        public function anyadir_cadenas_nieve($num){
            $this->numero_cadenas_nieve = $this->numero_cadenas_nieve + $num;
            
        }

        public function quitar_cadenas_nieve($num){
            if($this->numero_cadenas_nieve < $num){
                $this->numero_cadenas_nieve = 0;
            } else{
                $this->numero_cadenas_nieve = $this->numero_cadenas_nieve - $num;
            }
        }

        public function __get($valor) {
            if (property_exists(get_Class(),$valor)){
                return $this->$valor;
            } else {
                return parent::__get($valor);
            }
        }

        public function __set($atributo, $valor){
            if (property_exists(get_Class(),$atributo)){
                $this->$atributo = $valor;
            } else {
                parent::__set($atributo,$valor);
            }
        }

        public function anyadir_persona($pesoPersona){
            parent::anyadir_persona($pesoPersona);
            if ($this->peso >= 1500 && $this->numero_cadenas_nieve <= 2) {
                echo "Atención, ponga 4 cadenas para la nieve.";
                echo "<br>";
            }
            
        }

    }

?>