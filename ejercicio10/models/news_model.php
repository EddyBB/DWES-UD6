<?php

    function getConnection(){
        $user = 'root';
        $password = 'root';
        return new PDO('mysql:host=localhost;dbname=periodico', $user, $password);
    }
        
    function getPeriodicos(){
        $db = getConnection();
        $result = $db->query('SELECT Nombre, Fecha FROM news');
        $periodicos = array();
        while ($periodico = $result->fetch()) {
            $periodicos[] = $periodico;
        }

        return $periodicos;
    }

    function getPeriodico($id){
        $db = getConnection();
        $result = $db->prepare('SELECT Nombre, Fecha FROM news WHERE id=:id');
        $result->bindParam(":id",$id);
        $result->execute();
        $periodicos = array();
        while ($periodico = $result->fetch()) {
            $periodicos[] = $periodico;
        }

        return $periodicos;
    }
?>