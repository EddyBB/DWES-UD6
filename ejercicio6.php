<?php

interface IEquipoFutbol{
    public function getNumeroJugadores();
    public function juegaPartido();
}

interface ICampeonato{
    public function nombreCampeonato();
}

class EquipoFutbol implements IEquipoFutbol, ICampeonato{
    
    private int $numeroJugadores;
    private string $nombreEquipo;
    private string $nombreCampeonato;

    function __construct($numeroJugadores, $nombreEquipo, $nombreCampeonato){
        $this->numeroJugadores = $numeroJugadores;
        $this->nombreEquipo = $nombreEquipo;
        $this->nombreCampeonato = $nombreCampeonato;
    }

    function getNumeroJugadores(){
        return $this->numeroJugadores;
    }

    function juegaPartido(){
        echo $this->nombreEquipo . " VICTORIA";
    }

    function nombreCampeonato()
    {
        return $this->nombreCampeonato;
    }
}
    $equipo = new EquipoFutbol(15, "Betis", "Copa del Rey");
    echo $equipo->getNumeroJugadores();
    echo "<br>";
    $equipo->juegaPartido();
    echo "<br>";
    echo $equipo->nombreCampeonato();
    echo "<br>";
    echo "es instancia de ICampeonato? ";
    var_dump($equipo instanceof ICampeonato);
    echo "<br>";
    echo "es instancia de IEquipoFutbol? ";
    var_dump($equipo instanceof IEquipoFutbol);
?>