<?php
    spl_autoload_register(function($name) {
        include_once('includes/class.' . $name . '.php');
    });

    //crea un coche azul de 650kg
    $coche1 = new Coche("azul",650,2,3);

    //Añade una persona de 700 kg.
    $coche1->anyadir_persona(700);

    //Muestra el color y el peso.
    echo "color: " . $coche1->color;
    echo "<br>";
    echo "peso: " . $coche1->peso;
    echo "<br>";

    //Repinta el coche a amarillo y añade 3 cadenas para la nieve.
    $coche1->repintar("amarillo");
    $coche1->anyadir_cadenas_nieve(3);

    //Muestra el color y el número de cadenas para la nieve.
    echo "color: " . $coche1->color;
    echo "<br>";
    echo "número cadenas: " . $coche1->numero_cadenas_nieve;
    echo "<br>";

    //Crea un objeto Dos_ruedas marrón de 30 kg. Añada una persona de 2 kg. Ponga 2000 litros de gasolina.
    $moto1 = new Dos_ruedas("marrón",30,1500);
    $moto1->anyadir_persona(2);
    $moto1->poner_gasolina(2000);

    //Muestre el color y el peso del dos ruedas.
    echo "color: " . $moto1->color;
    echo "<br>";
    echo "peso: " . $moto1->peso;

?>