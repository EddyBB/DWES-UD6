<?php 
    abstract class FiguraGeometrica{
        private string $tipo;
        private string $color;

        abstract protected function Dibuja();
        abstract protected function Area();

    }

    class Cuadrado extends FiguraGeometrica{
        private float $lado;

        public function __construct($lado,$tipo,$color){
            $this->lado=$lado;
            $this->tipo=$tipo;
            $this->color =$color;
        }

        public function Dibuja(){
            echo $this->tipo . " de color " . $this->color;
        }

        public function Area(){
            return ($this->lado * $this->lado);
        }


    }

    class Triangulo extends FiguraGeometrica{
        private float $base;
        private float $altura;

        public function __construct($tipo,$base,$altura,$color){
            $this->base = $base;
            $this->altura = $altura;
            $this->tipo = $tipo;
            $this->color = $color;
        }

        public function Dibuja(){
            echo $this->tipo . " de color " . $this->color;
        }

        public function Area(){
            return ($this->base * $this->altura)/2;
        }
    }

    class Circulo extends FiguraGeometrica{
        private float $radio;

        public function __construct($radio,$tipo,$color){
            $this->radio=$radio;
            $this->tipo=$tipo;
            $this->color =$color;
        }

        public function Dibuja(){
            echo $this->tipo . " de color " . $this->color;
        }

        public function Area(){
            return (($this->radio*$this->radio)*pi());
        }
    }

    $cuadrado = New Cuadrado("Cuadrado",3,"rojo");
    $triangulo = New Triangulo("Triangulo",3,5,"verde");
    $circulo = New Circulo("Circulo",5,3,"amarillo");

    echo $cuadrado -> Area();
    echo $cuadrado -> Dibuja();
    echo $triangulo -> Area();
    echo $triangulo -> Dibuja();
    echo $circulo -> Area();
    echo $circulo -> Dibuja();

?>