<?php

session_start();
if(isset($_SESSION["nombre"])){
    header("location: ?controller=sexshop&action=todos");
}

function formulario(){
    require './models/usuarios_model.php';
    $error = "";
    include './views/login.php';
}

function loginUser(){
    require './models/usuarios_model.php';

    $nombre = "";
    $contrasenya = "";
    $error = "";
    

    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        function seguro($valor)
        {
            $valor = strip_tags($valor);
            $valor = stripslashes($valor);
            $valor = htmlspecialchars($valor);

            return $valor;
        }

        $nombre = seguro($_POST["nombre"]);
        $contrasenya = seguro($_POST["contrasenya"]);

        $user = obtenerUsuario($nombre);
        
        if ($user) {
            
            $contraseniaCorrecta = password_verify($contrasenya, $user["contrasenya"]);
            if ($contraseniaCorrecta) {
                session_start();

                $_SESSION["nombre"] = $user["usuario"];
                var_dump($_SESSION);
                header("location: ?controller=sexshop&action=todos");

            }else {

                $error =  "Error, contraseña incorrecta";
                
            }
        }else {
            $error =  "Error, usuario o contraseña incorrectos";
            
        }
    }

    include './views/login.php';
}

function cerrarSesion(){
    
    session_start();
    
    session_destroy();
    $error = "";
    header("location: ?controller=usuarios&action=formulario");
}

?>