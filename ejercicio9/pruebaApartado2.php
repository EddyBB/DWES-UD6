<?php
    spl_autoload_register(function($name) {
        include_once('includes/class.' . $name . '.php');
    });

    $vehiculo1 = new Vehiculo("Rojo", 450);
    $vehiculo1->circula();
    $vehiculo1->anyadir_persona(50);
    $vehiculo1->anyadir_persona(60);



?>