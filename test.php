<?php
require_once "ejercicio1.php";
require_once "ejercicio2.php";

$persona = new Persona("Juanito","131231L","M",70,145);

echo $persona->mostrar();
echo "<br>";

$persona->setNombre("Pepito");
$persona->setDni("123123K");

echo $persona->mostrar();
echo "<br>";

$trabajador = new Trabajador("Seneca");

echo $trabajador->mostrar();

?>