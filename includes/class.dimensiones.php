<?php

    class Dimensiones{
        private float $alto;
        private float $ancho;
        private float $largo;

        function __construct($alto,$ancho,$largo){
            $this->alto = $alto;
            $this->ancho = $ancho;
            $this->largo = $largo;

        }

        public function __get($atributo){
            return "El valor del atributo es: " . $this->$atributo;
        }

        public function __set($atributo, $valor){

            switch($atributo){
                    case "alto":
                        if(is_float($valor)>1)
                            $this->$atributo=$valor;
                        else
                            echo "El valor no puede ser menor a uno";
                            echo "<br>";
                        break;
                    case "ancho": 
                        if(is_float($valor)>1)
                            $this->$atributo=$valor;
                        else
                            echo "El valor no puede ser menor a uno";
                            echo "<br>";
                        break;
                    case "largo":
                        if(is_float($valor)>1)
                            $this->$atributo=$valor;
                        else
                            echo "El valor no puede ser menor a uno";
                            echo "<br>";
                        break;

            } 
        }

        function __toString(){
            return "alto= " . $this->alto . ",ancho= " . $this->ancho . ",largo= " . $this->largo;
        }
    }
