<?php

    spl_autoload_register(function($clase){
        require_once('includes/class.'.$clase.'.php');
    });

    

    //Crea un array cines que contenga 3 instancias de la clase Cine.
    $cine[0] = new Cine('Sevilla','Luis de Morales',1,new Dimensiones(10.,10.,10.),'Razon 1', 'B1234C', 10);
    $cine[1] = new Cine('Sevilla','Centro Comercial Lagoh',2,new Dimensiones(20.,20.,20.),'Razon 2', 'D3142T', 20);
    $cine[2] = new Cine('Sevilla','Av. de España',3,new Dimensiones(30.,30.,30.),'Razon 3', 'R4321J', 30);

    //Clona el segundo de los cines del array en un objeto nuevo.
    $copia = clone $cine[1];
    
    //Modifica el alto, ancho y largo de las dimensiones del cine clonado.
    $copia->dimensiones->alto = 60.;
    $copia->dimensiones->ancho = 70.;
    $copia->dimensiones->largo = 80.;

    //Utiliza la función __toString() para mostrar por pantalla todos los cines del array y el nuevo cine clonado.
    foreach($cine as $c){
        echo $c . '<br>';
    }

    echo $copia;

?>