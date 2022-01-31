<?php

    function getConnection(){
        $user = 'root';
        $password = 'root';
        return new PDO('mysql:host=localhost;dbname=tienda', $user, $password);
    }

    function obtenerElemento($id){
        
        try {
            $conexion = getConnection();
            $sql = $conexion->prepare("SELECT * FROM sexshop WHERE id=:id");
            $sql->bindParam(":id",$id);
            $sql->execute();
            
            return $sql->fetch();
            
        } catch (PDOException $e) {
            return $e->getMessage();
        }
        $conexion=null;
    }

    function eliminarElemento($id){
        
        try {
            $retorno = false;
            $conexion = getConnection();
            $sql = $conexion->prepare("DELETE FROM sexshop WHERE id = ?");
            $sql->bindParam(1,$id);
            $sql->execute();
            if($sql->rowCount() > 0){
                $retorno = true;
            }
            return $retorno;
            
        } catch (PDOException $e) {
            return $e->getMessage();
        }
        $conexion=null;
    }

    function editarElemento($id,$nombreProducto,$modelo,$descripcion,$precio,$stock,$fechaCreacionProducto,$imagen){
        
        try {
            $retorno = false;
            $conexion = getConnection();
            $sql = $conexion->prepare("UPDATE sexshop SET nombreProducto = ?,modelo = ?, descripcion = ?, precio = ?, stock = ?, fechaCreacionProducto = ?, imagen= ? WHERE id=?");
            
            $sql->bindParam(8,$id);
            $sql->bindParam(1,$nombreProducto);
            $sql->bindParam(2,$modelo);
            $sql->bindParam(3,$descripcion);
            $sql->bindParam(4,$precio);
            $sql->bindParam(5,$stock);
            $sql->bindParam(6,$fechaCreacionProducto);
            $sql->bindParam(7,$imagen);

            if($sql->execute()){
                $retorno = true;
            }
            return $retorno;
    
        } catch (PDOException $e) {
            return $e->getMessage();
        }
        $conexion=null;
    }

    function obtenerTodos(){
        
        try {
            $conexion = getConnection();
            $sql = $conexion->prepare("SELECT * FROM sexshop");
            $sql->execute();
            $array=[];
            while($fila = $sql->fetch(PDO::FETCH_BOTH)){
                $array[]=$fila;
            }
            return $array;
        } catch (PDOException $e) {
            return $e->getMessage();
        }
        $conexion=null;
    }

    function insertaElemento($nombreProducto,$modelo,$descripcion,$precio,$stock,$fechaCreacionProducto,$imagen){
        try {
            $conexion = getConnection();
        
            $sql = $conexion->prepare("INSERT INTO sexshop (nombreProducto, modelo, descripcion, precio, stock,fechaCreacionProducto,imagen) VALUES (:nombreProducto, :modelo, :descripcion, :precio, :stock, :fechaCreacionProducto, :imagen)");
            
            $sql->bindParam(":nombreProducto", $nombreProducto);
            $sql->bindParam(":modelo", $modelo);
            $sql->bindParam(":descripcion", $descripcion);
            $sql->bindParam(":precio", $precio);
            $sql->bindParam(":stock", $stock);
            $sql->bindParam(":fechaCreacionProducto", $fechaCreacionProducto);
            $sql->bindParam(":imagen", $imagen);

            $sql->execute();
            $last_id = $conexion->lastInsertId();
            return $last_id;
        } catch (PDOException $e) {
            return $e->getMessage();
        }
        $conexion=null;
    }

?>