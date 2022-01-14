<?php

class Camion extends Cuatro_ruedas {

    private string $longitud;

    function __construct($color, $peso, $numero_puertas, $longitud){
        parent::__construct($color, $peso, $numero_puertas);
        $this->longitud = $longitud;
        
    }

    public function anyadir_remolque($longitud_remolque) {
        $this->longitud += $longitud_remolque;
    }

    public function __get($valor){
        if (property_exists(get_Class(),$valor)) {
            return $this->$valor;
        } else {
            return parent::__get($valor);
        }
    }

    public function __set($name, $valor){
        $this->$name = $valor;
    }

}


?>