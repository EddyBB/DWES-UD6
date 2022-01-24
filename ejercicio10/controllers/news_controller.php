<?php

    function listar(){
        // se incluye el modelo
        require './models/news_model.php';

        //En $libros tenemos un array con todos los libros gracias al modelo
        $periodicos = getPeriodicos();

        //en $libros tememos un array
        include './views/news_view.php';
    }

    function unicoPeriodico(){
        require './models/news_model.php';

        $id = $_GET['id'];

        $periodicos = getPeriodico($id);
        
        include './views/unicoNews_view.php';
    }
?>