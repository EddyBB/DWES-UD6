<?php

    abstract class Vehiculo{
        private string $color;
        private float $peso;
        protected static int $numero_cambio_color = 0;

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

        public abstract function anyadir_persona($pesoPersona);

        public static function ver_atributo($object){
            echo "color: " . $object->color;
            echo "<br>";
            echo "peso: " . $object->peso;
            echo "<br>";
            echo "cambio de color: " . self::$numero_cambio_color;
            echo "<br>";

            if(get_class($object) == "Cuatro_ruedas" || get_class($object) == "Coche" || get_class($object) == "Camion"){
                echo "número puertas: " . $object-> numero_puertas;
                echo "<br>";
            }

            if(get_class($object) == "Dos_ruedas"){
                echo "cilindrada: " . $object->cilindrada;
                echo "<br>";
            }

            if(get_class($object) == "Coche"){
                echo "número cadenas: " . $object->numero_cadenas_nieve;
                echo "<br>";
            }

            if(get_class($object) == "Camion"){
                echo "longitud: " . $object->longitud;
                echo "<br>";
            }
        }

        public function setColor($color){
            $this->color = $color;
            self::$numero_cambio_color += 1;
        }

        public function setPeso($peso){
            if(($this->$peso + $peso) <= 2100){
                $this->peso += $peso;
            } else{
                echo "Error, no puede superar los 2.100 Kg";
                die();
            }
        }
    }

?>