<?php

    function __autoload($name){
        include_once 'includes/class.' . $name . '.php';
    }

    

?>