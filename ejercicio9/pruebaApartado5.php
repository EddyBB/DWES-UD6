<?php

    spl_autoload_register(function($name) {
        include_once('includes/class.' . $name . '.php');
    });

    //crea un coche verde de 2100 kg con 4 puertas.
    $coche1 = new Coche("verde", 2100,2,2);

    //Añade 2 cadenas para la nieve y una persona de 80 kg.
    $coche1->anyadir_cadenas_nieve(2);
    $coche1->anyadir_persona(80);
    
    //Cambie el color del coche a azul.
    $coche1->setColor("azul");

    //Quita 4 cadenas para la nieve.
    $coche1->quitar_cadenas_nieve(4);

    //Vuelve a pintar el coche en color negro.
    $coche1->setColor("negro");

    //Muestra todos los atributos del coche y el número de veces que se cambia el color con el método ver_atributo.
    $coche1->ver_atributo($coche1);

?>