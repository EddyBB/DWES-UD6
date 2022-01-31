<?php

session_start();
if(!isset($_SESSION["nombre"])){
    header("location: ?controller=usuarios&action=formulario");
}

function todos(){
    require './models/sexshop_model.php';

    $juguetes = obtenerTodos();
    
    include './views/sexshop_view.php';
}

function unicoElemento(){
    require './models/sexshop_model.php';

    $id = $_GET['id'];

    $juguetes = obtenerElemento($id);
    
    include './views/unicoJuguete_view.php';
}

function insertar(){
    require './models/sexshop_model.php';
    $action = htmlentities($_SERVER['PHP_SELF']);
    $sexshop = [];
    $sexshop["id"] = "";
    $sexshop["nombreProducto"]="";
    $sexshop["modelo"]="";
    $sexshop["descripcion"]="";
    $sexshop["precio"]="";
    $sexshop["stock"]="";
    $sexshop["fechaCreacionProducto"]="";
    $sexshop["imagen"]="";
    $errorInsercion = "";

    if($_SERVER["REQUEST_METHOD"] == "POST"){

        $nombreProducto = $_POST["nombreProducto"];
        $nombreProducto = strip_tags($nombreProducto);
        $nombreProducto = stripslashes($nombreProducto);
        $nombreProducto = htmlspecialchars($nombreProducto);

        $modelo = $_POST["modelo"];
        $modelo = strip_tags($modelo);
        $modelo = stripslashes($modelo);
        $modelo = htmlspecialchars($modelo);
        
        $descripcion = $_POST["descripcion"];
        $descripcion = strip_tags($descripcion);
        $descripcion = stripslashes($descripcion);
        $descripcion = htmlspecialchars($descripcion);

        $precio = $_POST["precio"];
        $stock = $_POST["stock"];
        $fechaCreacionProducto = $_POST["fechaCreacionProducto"];
        $imagen = $_FILES["imagen"]["name"];
        

        $target_file = basename($_FILES["avatar"]["name"]);
        $imagen = getimagesize($_FILES["avatar"]["tmp_name"]);
        if ($imagen !== false) {
            echo "File is an image - " . $imagen["mime"] . ".";
            $new_file = $target_file;
            if (!move_uploaded_file($_FILES["avatar"]["tmp_name"], 'images/' . $new_file)) {
                echo "ERROR IMAGE";
            }

            $uploadOk = 1;
        } else {
            echo "File is not an image.";
            $uploadOk = 0;
        }

        $juguetes = insertaElemento($nombreProducto,$modelo,$descripcion,$precio,$stock,$fechaCreacionProducto,$imagen);
        header("Location: index.php");
    }

    include './views/editSexshop_view.php';

}

function delete(){
    require './models/sexshop_model.php';

    $id = $_GET['id'];
        
    $juguetes = eliminarElemento($id);
    header("location: ?controller=sexshop&action=todos");
    
    include './views/sexshop_view.php';
}

function update(){
    require './models/sexshop_model.php';

    $id = $_GET['id'];
    $action = htmlentities($_SERVER['PHP_SELF'] . "?id=$id");
    $sexshop = obtenerElemento($id);
    $imagen = $sexshop['imagen'];

    $nombreProducto="";
    $modelo="";
    $descripcion="";
    $precio="";
    $stock="";
    $fechaCreacionProducto="";
    $errorInsercion = "";

    
    if($_SERVER["REQUEST_METHOD"] == "POST"){
        
        $nombreProducto = $_POST["nombreProducto"];
        $nombreProducto = strip_tags($nombreProducto);
        $nombreProducto = stripslashes($nombreProducto);
        $nombreProducto = htmlspecialchars($nombreProducto);

        $modelo = $_POST["modelo"];
        $modelo = strip_tags($modelo);
        $modelo = stripslashes($modelo);
        $modelo = htmlspecialchars($modelo);
        
        $descripcion = $_POST["descripcion"];
        $descripcion = strip_tags($descripcion);
        $descripcion = stripslashes($descripcion);
        $descripcion = htmlspecialchars($descripcion);

        $precio = $_POST["precio"];
        $stock = $_POST["stock"];
        $fechaCreacionProducto = $_POST["fechaCreacionProducto"];
        

        if ($_FILES["avatar"]["size"] != 0) {
            $target_dir = "images/";
            $target_file = basename($_FILES["avatar"]["name"]);
            $timestamp = time();
            $new_file = $timestamp . $target_file;
            if (editarElemento($id,$nombreProducto,$modelo,$descripcion,$precio,$stock,$fechaCreacionProducto,$imagen)) {
                move_uploaded_file($_FILES["avatar"]["tmp_name"], 'images/' . $new_file);
                header("Location: index.php");
            }
        } else {
            if (editarElemento($id,$nombreProducto,$modelo,$descripcion,$precio,$stock,$fechaCreacionProducto,$imagen)) {
                header("Location: index.php");
            } else {
                $errorInsercion = "NO SE HA MODIFICADO NINGÚN CAMPO";
            }
        }
    }

    include './views/editSexshop_view.php';
}

?>