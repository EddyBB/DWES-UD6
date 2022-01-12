<?php

    class LocalComercial extends Local{
        private string $razonSocial;
        private string $numLicencia;

        public function __construct($ciudad,$calle,$numeroPlantas,$dimensiones,$razonSocial, $numLicencia){

            parent::__construct($ciudad,$calle,$numeroPlantas,$dimensiones);

            if(is_string($razonSocial)){
                $this->razonSocial = $razonSocial;
            } else{
                echo "Error";
                die();
                echo "<br>";
            }
            
            if(is_string($numLicencia)){
                $this->numLicencia = $numLicencia;
            } else {
                echo "Error";
                die();
                echo "<br>";
            }
        }

        public function __toString(){
            return "<p>" . parent::__toString() . "</p>" . " <p>Razon Social: " . $this->razonSocial . "<br></p>" . " <p>Número de Licencia: " . $this->numLicencia . "<br></p>";
        }
    }

?>