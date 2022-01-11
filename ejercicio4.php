<?php
class Vivienda{
    
    private string $tipoVivienda;
    private float $valorMercado;

    function __construct($tipoVivienda, $valorMercado)
    {
        $this->tipoVivienda = $tipoVivienda;
        $this->valorMercado = $valorMercado;
    }

    public function __get($atributo){
        return "El valor del atributo es: " . $this->$atributo;
    }

    public function __set($atributo, $valor){

        switch($atributo){
                case "tipoVivienda":
                    $this->$atributo=$valor;
                    break;
                case "valorMercado": 
                    if($valor>0)
                        $this->$atributo=$valor;
                    else
                        echo "El valor no puede ser menor a cero";
                        echo "<br>";
                    break;
        } 
    }
}

    $miCasa = new Vivienda("casa", 205);
    echo $miCasa->tipoVivienda;
    echo "<br>";
    echo $miCasa->valorMercado;
    echo "<br>";
    $miCasa->tipoVivienda="piso";
    echo "<br>";
    echo $miCasa->tipoVivienda;
    echo "<br>";
    $miCasa->valorMercado="0";
    echo $miCasa->valorMercado;
?>