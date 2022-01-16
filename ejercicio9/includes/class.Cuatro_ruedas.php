<?php
    class Cuatro_ruedas extends Vehiculo{
        private int $numero_puertas;

        function __construct($color, $peso, $numero_puertas){
            parent::__construct($color, $peso);
            $this->numero_puertas = $numero_puertas;
        }
    
        public function repintar($color){
            $this->color = $color;
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

        function anyadir_persona($pesoPersona){
            $this->peso += $pesoPersona;
            
        }
    }
