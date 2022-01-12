<?php

    class Local{
        private string $ciudad;
        private string $calle;
        private int $numeroPlantas;
        private Dimensiones $dimensiones;

        public function __construct($ciudad,$calle,$numeroPlantas,$dimensiones){
            if(is_string($ciudad)){
                $this->ciudad = $ciudad;
            } else{
                echo "Error";
                die();
                echo "<br>";
            }
            
            if(is_string($calle)){
                $this->calle = $calle;
            } else{
                echo "Error";
                die();
                echo "<br>";
            }

            if(is_integer($numeroPlantas) && $numeroPlantas >= 1 && $numeroPlantas <= 10){
                $this->numeroPlantas = $numeroPlantas;
            } else{
                echo "Error";
                die();
                echo "<br>";
            }
            
            if($dimensiones instanceof Dimensiones){
                $this->dimensiones = $dimensiones;
            } else{
                echo "Error";
                die();
                echo "<br>";
            }
            
        }

        public function __get($atributo){
            return $this->$atributo;
        }

        public function getDimensiones(){
            return $this->dimensiones;
        }

        public function __toString(){
            return "<p>Ciudad: " . $this->ciudad . "<br></p> " . " <p>Calle: " . $this->calle . "<br></p>" . " <p>Plantas: " . $this->numeroPlantas . "<br></p>" . " <p>Dimensiones: " . $this->dimensiones . "<br></p>";
        }

        public function __clone(){
            $this->dimensiones = clone $this->dimensiones;
        }
    }
?>