<?php

function getConnection(){
    $user = 'root';
    $password = 'root';
    return new PDO('mysql:host=localhost;dbname=tienda', $user, $password);
}

function obtenerUsuario($usuario){

    try {
        $conexion = getConnection();
        $sql = $conexion->prepare("SELECT * FROM usuarios WHERE usuario=:usuario");
        $sql->bindParam(":usuario", $usuario);
        $sql->execute();

        return $sql->fetch();
    } catch (PDOException $e) {
        return $e->getMessage();
    }
    $conexion = null;
}



?>