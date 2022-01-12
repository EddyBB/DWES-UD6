<?php

    class Cine extends LocalComercial{
        private int $aforoSala;

        function __construct($aforoSala){
            if(is_integer($aforoSala) && $aforoSala > 0){
                $this->aforoSala = $aforoSala;
            } else{
                echo "Error";
                die();
                echo "<br>";
            }
        }

        function __toString(){
            return "<p>" . parent::__toString() . "</p>" . " <p>Aforo: " . $this->aforoSala . "<br></p>";
        }
    }

?>