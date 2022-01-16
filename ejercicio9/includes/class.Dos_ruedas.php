<?php
    class Dos_ruedas extends Vehiculo{
        private int $cilindrada;

        function __construct($color, $peso, $cilindrada){
            parent::__construct($color, $peso);
            $this->cilindrada = $cilindrada;  
        }

        public function poner_gasolina($litros){
            $this->peso += $litros*1.5;
        }

        public function __get($valor){
            if (property_exists(get_Class(),$valor)) {
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
            $this->peso += $pesoPersona + 1.5;
        }

    }
?>