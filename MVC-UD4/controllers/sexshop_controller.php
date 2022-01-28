<?php
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
        

        $directorioImagen = "images/";
        $archivoImagen = $directorioImagen . basename($_FILES["imagen"]["name"]);
        $uploadOk=1;
        $tipoImagen = strtolower(pathinfo($archivoImagen,PATHINFO_EXTENSION));

        if(empty($_FILES["imagen"]["tmp_name"])){
            $errorInsercion = "Error, selecciona imagen.";
        }else {
            $check = getimagesize($_FILES["imagen"]["tmp_name"]);
            if($check !== false){
                $uploadOk = 1;
            } else {
                $uploadOk = 0;
            }
            

            if ($uploadOk == 0) {
                $errorInsercion = "Error, seleccione una imagen";
              
              } else {
                if (move_uploaded_file($_FILES["imagen"]["tmp_name"], $archivoImagen)) {
                    $id=insertaElemento($nombreProducto,$modelo,$descripcion,$precio,$stock,$fechaCreacionProducto,$imagen);
                    if($id){
                        header("location: view.php?id=$id");
                    } else {
                        $errorInsercion = "Error de inserción";
                    }
                } else {
                  $errorInsercion = "Lo sentimos, ha ocurrido un error en la subida de imagen.";
                }
            }
        }
        $juguetes = insertaElemento($nombreProducto,$modelo,$descripcion,$precio,$stock,$fechaCreacionProducto,$imagen);
       header("location: sexshop_view.php");
    }

    
    include './views/editSexshop_view.php';

}

function delete(){
    require './models/sexshop_model.php';

    $id = $_GET['id'];
        
    $juguetes = eliminarElemento($id);
    $juguetes = obtenerTodos();
    
    include './views/sexshop_view.php';
}

function update(){
    require './models/sexshop_model.php';

    $id = $_GET['id'];
    $action = htmlentities($_SERVER['PHP_SELF']. "?id=$id");
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
        

        $directorioImagen = "images/";
        $archivoImagen = $directorioImagen . basename($_FILES["imagen"]["name"]);
        $uploadOk=1;

        if(empty($_FILES["imagen"]["tmp_name"])){
            
            $imagen = $sexshop['imagen'];
            $id=editarElemento($id,$nombreProducto,$modelo,$descripcion,$precio,$stock,$fechaCreacionProducto,$imagen);
            if($id){
                $id = $_POST["id"];
                header("location: view.php?id=$id");
            } else {
                   $errorInsercion = "Error de inserción";
            }
        }else {

            if (move_uploaded_file($_FILES["imagen"]["tmp_name"], $archivoImagen)) {
                $imagen = $_FILES["imagen"]["name"];
                $id=editarElemento($id,$nombreProducto,$modelo,$descripcion,$precio,$stock,$fechaCreacionProducto,$imagen);
                if($id){
                    $id = $_POST["id"];
                    header("location: view.php?id=$id");
                } else {
                       $errorInsercion = "Error de inserción";
                }
            } else {
                $errorInsercion = "Lo sentimos, ha ocurrido un error en la subida de imagen.";
            }
        }
    }

    $juguetes = editarElemento($id,$nombreProducto,$modelo,$descripcion,$precio,$stock,$fechaCreacionProducto,$imagen);
    
    include './views/editSexshop_view.php';
}

?>