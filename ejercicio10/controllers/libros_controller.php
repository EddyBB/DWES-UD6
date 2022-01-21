<?php

    function listar(){
        // se incluye el modelo
        require './models/libros_model.php';

        //En $libros tenemos un array con todos los libros gracias al modelo
        $libros = getLibros();

        //en $libros tememos un array
        include './views/libros_view.php';
    }

    function unicoLibro(){
        require './models/libros_model.php';

        $id = $_GET['id'];

        $libros = getLibro($id);
        
        include './views/libros_view.php';
    }
?>