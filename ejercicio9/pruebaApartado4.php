<?php

    spl_autoload_register(function($name) {
        include_once('includes/class.' . $name . '.php');
    });

    //crea un dos ruedas transparente de 1550 kg.
    $moto1 = new Dos_ruedas("transparente", 1550, 100);

    //Añada una persona de 70 kg y muestre su peso total.
    $moto1->anyadir_persona(70);

    //Cambie a verde el color del objeto dos ruedas. Incluya una cilindrada de 1000.
    $moto1->color = "verde";
    $moto1->cilindrada = 1000;

    //Muestre todos los valores de los atributos del dos ruedas con la función ver_atributo.
    $moto1->ver_atributo($moto1);
    echo "<br>";

    //Cree un camión blanco de 6000 kg.
    $camion1 = new Camion("blanco", 6000, 1, 100);

    //Añada una persona de 84 kg. Vuelva a pintarlo, en color azul. Incluye 2 puertas.
    $camion1->anyadir_persona(84);
    $camion1->color = "azul";
    $camion1->numero_puertas += 2;

    //Muestre todos los valores de los atributos del camión con la función ver_atributo.
    $camion1->ver_atributo($camion1);
?>