<?php

    function getConnection(){
        $user = 'root';
        $password = 'root';
        return new PDO('mysql:host=localhost;dbname=biblioteca', $user, $password);
    }
        
    function getLibros(){
        $db = getConnection();
        $result = $db->query('SELECT titulo, precio FROM libros');
        $libros = array();
        while ($libro = $result->fetch()) {
            $libros[] = $libro;
        }

        return $libros;
    }

    function getLibro($id){
        $db = getConnection();
        $result = $db->prepare('SELECT titulo, isbn, precio FROM libros WHERE id=:id');
        $result->bindParam(":id",$id);
        $result->execute();
        $libros = array();
        while ($libro = $result->fetch()) {
            $libros[] = $libro;
        }

        return $libros;
    }
?>