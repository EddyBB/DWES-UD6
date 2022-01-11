<?php

    class Local{
        private string $ciudad;
        private string $calle;
        private int $area;

        function __construct($ciudad,$calle,$area){
            $this->ciudad = $ciudad;
            $this->calle = $calle;
            $this->area = $area;
        }
    }

?>