<?php

    interface IVehiculo extends Vehiculo{

        public function __set($atributo,$valor);

        public function __get($atributo);

        public function circula();

        public function anyadir_persona($pesoPersona);

        public static function ver_atributo($object);

        public function setColor($color);

        public function setPeso($peso);
    }

?>