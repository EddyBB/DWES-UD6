<?php

require_once "ejercicio3.php";

$persona = new Persona("Juanito","131231L","M",70,145);

echo $persona->mostrar();
echo "<br>";

$persona->setNombre("Pepito");
$persona->setDni("123123K");

echo $persona->mostrar();
echo "<br>";

echo $persona;
echo "<br>";

$trabajador = new Trabajador("Juanito","131231L","M",70,145,"Seneca");

echo $trabajador->mostrar();
echo "<br>";

echo $trabajador;
echo "<br>";

?>