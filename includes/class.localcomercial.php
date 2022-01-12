<?php

    class LocalComercial extends Local{
        private string $razonSocial;
        private string $numLicencia;

        function __construct($razonSocial, $numLicencia){
            if(is_string($razonSocial)){
                $this->razonSocial = $razonSocial;
            } elseif(is_string($numLicencia)){
                $this->numLicencia = $numLicencia;
            } else {
                echo "Error";
                die();
                echo "<br>";
            }
        }

        function __toString(){
            return "<p>" . parent::__toString() . "</p>" . " <p>Razon Social: " . $this->razonSocial . "<br></p>" . " <p>Número de Licencia: " . $this->numLicencia . "<br></p>";
        }
    }

?>