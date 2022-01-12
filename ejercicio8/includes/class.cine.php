<?php

    class Cine extends LocalComercial{
        private int $aforoSala;

        public function __construct($ciudad,$calle,$numeroPlantas,$dimensiones,$razonSocial, $numLicencia,$aforoSala){

            parent::__construct($ciudad,$calle,$numeroPlantas,$dimensiones,$razonSocial, $numLicencia);

            if(is_integer($aforoSala) && $aforoSala > 0){
                $this->aforoSala = $aforoSala;
            } else{
                echo "Error";
                die();
                echo "<br>";
            }
        }

        public function __toString(){
            return "<p>" . parent::__toString() . "</p>" . " <p>Aforo: " . $this->aforoSala . "<br></p>";
        }
    }

?>